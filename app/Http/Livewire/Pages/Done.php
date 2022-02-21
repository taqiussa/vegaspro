<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Transaction;
use Mike42\Escpos\EscposImage;
use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\FilePrintConnector;
class Done extends Component
{use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $idtransaction;
    public $action;
    public array $data;
    public function selectedTransaction($id, $action){
        $this->idtransaction = $id;
        if($action == 'delete'){
            $this->dispatchBrowserEvent('openDeleteModal');
        }
        else {
            $this->dispatchBrowserEvent('openModal');
        }
    }
    public function delete(){
        Transaction::destroy($this->idtransaction);
        $this->dispatchBrowserEvent('closeDeleteModal');
        $this->dispatchBrowserEvent('notyf:delete',['message' => 'Pesanan dibatalkan']);
    }
    public function procced(){
        Transaction::find($this->idtransaction)->update(['status' => 'On Process']);
        $this->dispatchBrowserEvent('closeModal');
        $this->dispatchBrowserEvent('notyf:success',['message' => 'Pesanan berhasil diproses']);
    }
    public function loadTransactions(){
        $this->data = [
            'transactions' => Transaction::paginate(5)
        ];
    }
    public function print($id)
    {

        /* Open file */
        $transaction =  Transaction::find($id);
        $tmpdir = sys_get_temp_dir();
        $file =  tempnam($tmpdir, 'cetak');

        /* Do some printing */
        $connector = new FilePrintConnector($file);
        $printer = new Printer($connector);

        /* Print Logo */

        $img = EscposImage::load('images/vegaskecil.png');
        $printer->setJustification(Printer::JUSTIFY_CENTER);
        $printer->bitImageColumnFormat($img);
        // $printer->feed();
        /* Name of shop */
        $printer->selectPrintMode(Printer::MODE_EMPHASIZED);
        $printer->setJustification(Printer::JUSTIFY_CENTER);
        $printer->text("Vegas Media\n");
        $printer->selectPrintMode();
        $printer->text("Phone : 0858-7525-8684\n");
        $printer->feed();

        /* Information for the receipt */
        $items = array(
            new item("Nama", $transaction->name),
            new item("Pesanan", $transaction->order),
            new item("Jumlah@", $transaction->qty),
            new item("Harga@", 'Rp. ' . number_format($transaction->price, 0, ".", ".") . ",-"),
            new item("Total", 'Rp. ' . number_format($transaction->total, 0, ".", ".") . ",-"),
        );

        /* Items */
        $printer->setJustification(Printer::JUSTIFY_LEFT);
        $printer->setEmphasis(true);
        $printer->text(new item('', '')); //Rp
        $printer->setEmphasis(false);
        foreach ($items as $item) {
            $printer->text($item);
        }
        $printer->feed();

        /* Footer */
        $printer->setJustification(Printer::JUSTIFY_CENTER);
        $printer->text("Vegas Media\n");
        $printer->feed();

        /* Cut the receipt and open the cash drawer */
        $printer->cut();
        $printer->pulse();

        $printer->close();

        /* Copy it over to the printer */
        copy($file, "//localhost/Gudang");
        // copy($file, "//localhost/EPSONTU");
        unlink($file);
        // return redirect('/laporan');
    }
    public function render()
    {
        $datas = [
                    'transactions' => Transaction::whereStatus('Done')->latest()->paginate(5),
                    ];
        return view('livewire.pages.done', $datas);
    }
}

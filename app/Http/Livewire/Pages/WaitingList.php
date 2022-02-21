<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Transaction;
class WaitingList extends Component
{
    use WithPagination;
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
    public function render()
    {
        $datas = [
            'transactions' => Transaction::whereStatus('Waiting List')->latest()->paginate(5),
        ];
        return view('livewire.pages.waiting-list', $datas);
    }
}

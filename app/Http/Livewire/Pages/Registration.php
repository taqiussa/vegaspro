<?php

namespace App\Http\Livewire\Pages;

use App\Models\Transaction;
use Livewire\Component;

class Registration extends Component
{
    public $name;
    public $order;
    public $qty;
    public $price;
    public $total;
    public $order_date;
    public $due_date;
    public $status;
    protected $rules = [
        'name' => 'required',
        'order' => 'required',
        'qty' => 'required|integer|gt:0',
        'price' => 'required|integer|gt:0',
        'order_date' => 'required',
        'due_date' => 'required'
    ];
    protected $messages = [
        'name.required' => 'Silahkan Isi Nama',
        'order.required' => 'Silahkan Tulis Pesanan',
        'qty.required' => 'Silahkan Isi Jumlah @Pesanan',
        'price.required' => 'Silahkan Isi Harga @Jumlah',
        'order_date.required' => 'Silahkan Atur Tanggal Pesan',
        'due_date.required' => 'Silahkan Atur Tanggal Jadi',
    ];
    public function clearVar(){
        $this->name = '';
        $this->order = '';
        $this->qty = 0;
        $this->price = 0;
        $this->total = 0;
        $this->order_date = gmdate('Y-m-d');
        $this->due_date = gmdate('Y-m-d');
        $this->resetErrorBag();
    }
    public function save(){
        $this->validate();
        $this->total = $this->qty * $this->price;
        $data = [
            'name' => $this->name,
            'order' => $this->order,
            'qty' => $this->qty,
            'price' => $this->price,
            'total' => $this->total,
            'order_date' => $this->order_date,
            'due_date' => $this->due_date,
            'status' => 'Waiting List',
        ];
        Transaction::create($data);
        $this->dispatchBrowserEvent('notyf:success', ['message' => 'Berhasil Menyimpan Pesanan']);
        $this->clearVar();
    }
    public function mount(){
        $this->resetErrorBag();
        $this->qty = 0;
        $this->price = 0;
        $this->order_date = gmdate('Y-m-d');
        $this->due_date = gmdate('Y-m-d');
    }
    public function render()
    {
        return view('livewire.pages.registration');
    }
}

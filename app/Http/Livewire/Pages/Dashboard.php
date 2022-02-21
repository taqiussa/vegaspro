<?php

namespace App\Http\Livewire\Pages;

use App\Models\Transaction;
use Livewire\Component;
use Livewire\WithPagination;

class Dashboard extends Component
{
    use WithPagination;
    public $idtransaction;
    public array $data;
    public $humanMonth;
    public $totalOrders;
    public $totalDone;
    public $totalWaiting;
    public $totalYear;
    public $qtyPerMonth;
    public $totalQty;
    public $incomePerMonth;
    public $totalIncome;
    public $month;
    public $action;
    protected $paginationTheme = 'bootstrap';
    public function loadTransactions(){
        $this->data = [
            'transactions' => Transaction::paginate(5)
        ];
    }
    public function mount(){
        $this->month = date('m', strtotime(now()));
    }
    public function monthName(){
        switch ($this->month) {
            case '1':
                $this->humanMonth = 'Januari';
                break;
            case '2':
                $this->humanMonth = 'Februari';
                break;
            case '3':
                $this->humanMonth = 'Maret';
                break;
            case '4':
                $this->humanMonth = 'April';
                break;
            
            case '5':
                $this->humanMonth = 'Mei';
                break;
            case '6':
                $this->humanMonth = 'Juni';
                break;
            case '7':
                $this->humanMonth = 'Juli';
                break;
            case '8':
                $this->humanMonth = 'Agustus';
                break;
            
            case '9':
                $this->humanMonth = 'September';
                break;
            case '10':
                $this->humanMonth = 'Oktober';
                break;
            case '11':
                $this->humanMonth = 'November';
                break;
            case '12':
                $this->humanMonth = 'Desember';
                break;
            default:
                # code...
                break;
        }
    }
    public function render()
    {
        $this->monthName();
        $datas = [
            'transactions' => Transaction::latest()->paginate(5),
        ];
        $this->totalOrders = Transaction::whereMonth('order_date', $this->month)->count();
        $this->totalDone = Transaction::whereStatus('Done')->whereMonth('order_date', $this->month)->count();
        $waitingList = Transaction::whereStatus('Waiting List')->whereMonth('order_date', $this->month)->count();
        $onProcess = Transaction::whereStatus('On Process')->whereMonth('order_date', $this->month)->count();
        $this->totalWaiting = $waitingList + $onProcess;
        $this->totalYear = Transaction::whereYear('order_date', date('Y', strtotime(now())))->count();
        $this->qtyPerMonth = Transaction::whereStatus('Done')->whereMonth('order_date', $this->month)->sum('qty');
        $this->totalQty = Transaction::whereYear('order_date', date('Y', strtotime(now())))->sum('qty');
        $this->incomePerMonth = Transaction::whereStatus('Done')->whereMonth('order_date', $this->month)->sum('total');
        $this->totalIncome = Transaction::whereStatus('Done')->whereYear('order_date', date('Y', strtotime(now())))->sum('total');
        return view('livewire.pages.dashboard', $datas);
    }
}

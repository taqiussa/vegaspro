<?php

namespace App\Http\Livewire\Livewire;

use Illuminate\Support\Facades\URL;
use Livewire\Component;

class Home extends Component
{
    public $pageroute = 'home';
    
    public function changeRoute($newroute) {
        $this->pageroute = $newroute;
        // $this->emit('urlChanged', http_build_query([$newroute => $newroute]));
    }
    public function render()
    {
        return view('livewire.livewire.home');
    }
}

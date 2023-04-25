<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Order extends Component
{
    public $orders ='Alagie';
    public function render()
    {
        return view('livewire.order');
    }
}

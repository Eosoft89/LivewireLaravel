<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $count = 0;
    public $username = "";

    // función que se ejecuta al momento de montar el componente
    public function mount()
    {
        $this->count = 25;
    }

    public function render()
    {
        return view('livewire.counter');
    }

    public function increment()
    {
        $this->count++;
    }
}

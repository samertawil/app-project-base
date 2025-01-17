<?php

namespace App\Livewire;

use Livewire\Component;

class Test2 extends Component
{
    public $prop;

    public function mount($var) {
        $this->prop=$var;
    }
    public function render()
    {
        return view('livewire.test2');
    }
}

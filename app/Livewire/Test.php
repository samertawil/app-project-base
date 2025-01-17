<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Validate;

class Test extends Component
{
 
    #[Validate('required |min:5',  as: 'date of birth')]
    public $prop1;

 
    public function store() {

        $this->validate();
        dump($this->prop1);

 
    }


    

    public function updated($prop1) {

        $this->validateOnly($prop1);
 
    }
 

    public function render()
    {
        return view('livewire.test');
    }
}

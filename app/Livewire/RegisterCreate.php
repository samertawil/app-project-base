<?php

namespace App\Livewire;

use Livewire\Component;

class RegisterCreate extends Component
{
    public function render()
    {
        return view('auth.register-create')->layout('components.layouts.app-org');
    }
}

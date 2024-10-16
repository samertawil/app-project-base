<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{

    public $email = '';
    public $password = '';
    public $remember = false;
    public $user_name= '';

    protected $rules = [
        'user_name' => ['required'],
        'password' => ['required'],
    ];

    public function authenticate()
    {
       
        $this->validate();

        if (!Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            $this->addError('email', trans('auth.failed'));

            return;
        }

        return redirect()->intended(route('home'));
    }

    public function render()
    {
        return view('livewire.auth.login')->extends('layouts.auth');
 
    }
}

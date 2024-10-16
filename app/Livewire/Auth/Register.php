<?php

namespace App\Livewire\Auth;

use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Livewire\Component;

class Register extends Component
{

    public $name = '';
    public $user_name = '';
    public $mobile = '';
    public $email = '';
    public $password = '';
    public $passwordConfirmation = '';
    public $year='';
    public $month='';
    public $day='';
 

    
 
    public function register()
    {
        
   
         $this->validate(User::rules());
        
      
        $user = User::create([
            'user_name' => $this->user_name,
            'name' => $this->name,
            'mobile' => $this->mobile,
            'password' => Hash::make($this->password),
          
            
        ]);

        event(new Registered($user));

        Auth::login($user, true);

        return redirect()->intended(route('home'));
    }

    public function render()
    {
    
        return view('auth.register')->layout('components.layouts.app-org');
    }
}

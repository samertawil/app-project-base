<?php

namespace App\Livewire\UserModule;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Services\FlashMsg;

class RegisterForm extends Component
{


    public $name = '';
    public $user_name = '';
    public $mobile = '';
    public $email = '';
    public $password = '';
    public $passwordConfirmation = '';
     
 

    
    public function register()
    {

        $this->validate(UserRequest::rules());

     
         $user = User::create([
            'user_name' => $this->user_name,
            'name' => $this->name,
            'mobile' => $this->mobile,
            'created_by'=>Auth::user()->id,
            'password' => Hash::make($this->password),
            'need_to_change'=>1,

        ]);


     
        $this->dispatch('closeModel');
      
        $this->reset(['user_name','name','mobile','password' ,'passwordConfirmation']);
    }


    public function render()
    {
      
        return view('users.register-form');
    }
}

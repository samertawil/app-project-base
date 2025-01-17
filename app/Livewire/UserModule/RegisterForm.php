<?php

namespace App\Livewire\UserModule;

use App\Models\User;
use Livewire\Component;
use App\Services\FlashMsg;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterForm extends Component
{

    #[Validate(['required'])]
    public $name = '';

    #[Validate(['required', 'unique:users,user_name', 'min:3', 'max:35'])]
    public $user_name = '';

     #[Validate(['required', 'numeric', 'min_digits:10', 'max_digits:15', 'unique:users,mobile'])]
    public $mobile = '';

    public $email = '';

    #[Validate(['required', 'min:4', 'same:passwordConfirmation'])]
    public $password = '';

    public $passwordConfirmation = '';
     
 

    
    public function register()
    {

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


    public function updated() {
        $this->validate();
    }


    public function render()
    {
      
        return view('users.register-form');
    }
}

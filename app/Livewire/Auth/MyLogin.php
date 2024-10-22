<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class MyLogin extends Component
{

    public $email = '';
    public $password = '';
    public $remember = false;
    public $user_name = '';

    protected $rules = [
        'user_name' => ['required','exists:users,user_name'],
        'password' => ['required'],
    ];

    protected $messages=[
        'user_name.exists'=>'خطأ باسم المستخدم',
    ];

    public function authenticate()
    {
   
        $this->validate($this->rules,$this->messages);

         $user= User::user( $this->user_name);
       
       
        if ($user->user_activation != 1) 
        {

          $this->addError('user_name', trans('auth.deactive'));

          return;
        }

        if($user->need_to_change == 1) {

            return redirect()->route('password.change', ['userId' => $user->user_name]);
         
        }

        if (!Auth::attempt(['user_name' => $this->user_name, 'password' => $this->password], $this->remember)) {

            $this->addError('user_name', trans('auth.failed'));

            return;
        }

        return redirect()->intended(route('home'));
    }

    public function render()
    {
      
        return view('auth.login')->layout('components.layouts.app-org');


    }
}

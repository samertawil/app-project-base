<?php

namespace App\Livewire\UserModule;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Title;
use App\Livewire\Auth\Register;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserCreate extends Component
{

    public $name = '';
    public $user_name = '';
    public $mobile = '';
    public $email = '';
    public $password = '';
    public $passwordConfirmation = '';
    public $year = '';
    public $month = '';
    public $day = '';






    #[Title('الحسابات والمستحدمين')]
    public function render()
    {

        $pageTitle='الحسابات والمستخدمين';
        
        return view('users.user-create')->layoutData(['pageTitle'=>$pageTitle]);
    }
}

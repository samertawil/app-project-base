<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePassword extends Component
{
    #[Validate(['required'])]
    public $userId;

    #[Validate(['required'])]
    public $currentPassword;

    #[Validate(['required','min:4'])]
    public $password;

    #[Validate(['same:password'])]
    #[Validate('required_with:password', message:'حقل تأكيد كلمة المرور مطلوب')]
    public $passwordConfirmation;

    public function resetPassword() {

        $user = User::where('user_name', $this->userId)->first();

        $this->validate();

        if (Auth::attempt(['user_name' => $this->userId, 'password' => $this->password])) {
            
            $this->addError('password', 'خطأ -  كلمة المرور الجديدة متطابقة مع الحالية  ');
       
            return;

        } 

            
        if (!Auth::attempt(['user_name' => $this->userId, 'password' => $this->currentPassword])) {
            
            $this->addError('currentPassword', trans('auth.password'));
       
            return;

        } 

    
        $user->update([
            'password'=>Hash::make($this->password),
            'need_to_change'=>0,
        ]);

        toastr()->success('تم تغير كلمة المرور بنجاح');
       
        return redirect()->intended(route('home'));

       

    }
    

   #[Title('تحديث كلمة المرور')]
    public function render()
    {
        $pageTitle=__('mytrans.renewPassword');
        return view('livewire.auth.change-password')->layoutData(['pageTitle'=>$pageTitle]);
    }
}

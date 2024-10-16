<?php



use App\Livewire\Auth\Verify;
use App\Livewire\Auth\MyLogin;
use App\Livewire\Auth\Register;
use App\Livewire\RegisterCreate;
use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Passwords\Email;
use App\Livewire\Auth\Passwords\Reset;
use App\Livewire\Auth\Passwords\Confirm;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\EmailVerificationController;
use App\Livewire\Auth\ChangePassword;

Route::middleware('guest')->group(function () {

    Route::get('login', MyLogin::class) ->name('login');
       
    Route::get('/register-create', RegisterCreate::class)->name('register.create');
    
    Route::get('register', Register::class) ->name('register');

  
  
});
       
Route::get('password/change/{userId?}', ChangePassword::class) ->name('password.change');

Route::get('password/reset', Email::class) ->name('password.request');
   

Route::get('password/reset/{token}', Reset::class) ->name('password.reset');
  


Route::middleware('auth')->group(function () {
    Route::get('email/verify', Verify::class)
        ->middleware('throttle:6,1')
        ->name('verification.notice');

    Route::get('password/confirm', Confirm::class)
        ->name('password.confirm');
});

Route::middleware('auth')->group(function () {
    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
        ->middleware('signed')
        ->name('verification.verify');

    Route::post('logout', LogoutController::class)
        ->name('logout');
});
<?php

use App\Http\Controllers\EditRoleController;
use App\Livewire\MainPage;
use App\Livewire\RegisterForm;
use App\Livewire\Test;
use Illuminate\Support\Facades\Route;


Route::get('/', MainPage::class)->name('home')->middleware('auth');

Route::get('/t', function() {
    return view('components.layouts.app');
});


Route::get('/card', function() {
    return view('cards');
});
Route::get('/empty', function() {
    return view('empty');
});

Route::get('/table-basic', function() {
    return view('table-basic');
});


Route::get('/table-data', function() {
    return view('table-data');
});


Route::get('/collapse', function() {
    return view('collapse');
});


Route::get('/icons', function() {
    return view('icons');
});

Route::get('/dropdown', function() {
    return view('dropdown');
});

Route::get('/modals', function() {
    return view('modals');
});
 

Route::get('/contacts', function() {
    return view('contacts');
});
 

Route::get('/form-elements', function() {
    return view('form-elements');
});
 
Route::view('/test','test');

include __DIR__ .'/auth.php';

include __DIR__ . '/status.php';

include __DIR__ .'/user.php';

include __DIR__ .'/permission.php';

include __DIR__ .'/setting.php';

include __DIR__ .'/address.php';


 

 
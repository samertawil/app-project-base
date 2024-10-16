<?php

use App\Livewire\UserModule\UserIndex;
use App\Livewire\UserModule\UserCreate;
use Illuminate\Support\Facades\Route;
 


Route::get('/users/index', UserIndex::class)->name('user.index');
Route::get('/users/create', UserCreate::class)->name('user.create');
 



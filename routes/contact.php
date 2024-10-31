<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\contact\ContactCreate;
use App\Livewire\contact\ContactResource;

Route::prefix('contact/')->name('contact.')->middleware('web', 'auth')->group( function() {

    Route::get('create',ContactCreate::class)->name('create');
    Route::get('index',ContactResource::class)->name('index');

});
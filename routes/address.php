<?php

use App\Livewire\AddressModule\AddressParts;
use Illuminate\Support\Facades\Route;

Route::prefix('address/')->name('address.')->middleware(['web', 'auth'])->group(function () {
   
    Route::get('parts/create',AddressParts::class)->name('parts');

    Route::get('parts/api/{value?}/{model?}',[AddressParts::class,'api_create_short_address'])->name('api.create');

});
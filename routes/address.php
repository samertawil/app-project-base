<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\AddressModule\AddressParts;
use App\Livewire\AddressesModule\AddressesIndex;

Route::prefix('address/')->name('address.')->middleware(['web', 'auth'])->group(function () {
   
    Route::get('parts/create',AddressParts::class)->name('parts');

    Route::get('parts/api/{value?}/{model?}',[AddressParts::class,'api_create_short_address'])->name('api.create');

});



Route::prefix('addresses/')->name('addresses.')->middleware(['web', 'auth'])->group(function () {
   
    Route::get('parts/index',AddressesIndex::class)->name('index');

  

});
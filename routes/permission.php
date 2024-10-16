<?php

use App\Livewire\Role\RoleEdit;
use App\Livewire\Role\RoleIndex;
use App\Livewire\Role\RoleCreate;
use Illuminate\Support\Facades\Route;
use App\Livewire\Ability\AbilityIndex;
use App\Livewire\UserRolesModules\UserRoleCreate;


Route::prefix('/ability')->name('ability.')->middleware(['web','auth'])->group(function() {
    
    Route::get('index',AbilityIndex::class)->name('index');
    
});


Route::prefix('/role')->name('role.')->middleware(['web','auth'])->group(function() {
    
    Route::get('create/{id?}',RoleCreate::class)->name('create');
    Route::get('index',RoleIndex::class)->name('index');
    Route::get('abilities/update/{id?}',RoleCreate::class)->name('update');
    Route::get('abilities/edit/{id?}',RoleEdit::class)->name('edit');
    
});

Route::prefix('/user-roles')->name('user-roles.')->middleware(['web','auth'])->group(function() {
    
    Route::get('create/{userID?}',UserRoleCreate::class)->name('create');
    
});
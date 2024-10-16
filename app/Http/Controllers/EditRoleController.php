<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Ability;
use Illuminate\Http\Request;

class EditRoleController extends Controller
{
    public function index($id)
    {
     $roles= Role::find($id);
  
     $abilities = Ability::select('id', 'module_id', 'ability_description', 'ability_name', 'activation')->with('modulename')->withoutGlobalScope('not-active')->get();
     
     $abilities_module = Ability::select('module_id')->groupby('module_id')->get();
     
     return view('role.role-create2', compact('roles', 'abilities', 'abilities_module'));


     
    }
}

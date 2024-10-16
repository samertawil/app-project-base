<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
{
   
    public function authorize(): bool
    {
        return true;
    }

 
    public static function rules($id=''): array
    {
        return [
           
            "name" => ['required', Rule::unique('roles')->ignore($id)],
            "abilitiesId" => ['required'],
            
        ];
    }
}

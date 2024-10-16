<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class SystemNamesRequest extends FormRequest
{
   
    public function authorize(): bool
    {
        return true;
    }

 
    public static function rules(): array
    {
        return [
           
            'system_name' => ['required', 'unique:setting_systems,system_name'],
            
        ];
    }
}

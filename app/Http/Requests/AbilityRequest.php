<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AbilityRequest extends FormRequest
{
 
    public function authorize(): bool
    {
        return true;
    }

  
    public static function rules(): array
    {
        return [
            "ability_name" => ['required','string'],
            "ability_description" => ['required','string'],
            "activation" => ['required', 'in:"0","1"'],
            "module_id" =>['required','exists:statuses,id']
        ];
    }
}

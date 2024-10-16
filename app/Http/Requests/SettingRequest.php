<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
{
  
    public function authorize(): bool
    {
        return true;
    }

   
    public static function rules(): array
    {
        return [
           'key'=>['required','unique:settings,key'],
           'value'=>['required'],
        ];
    }
}

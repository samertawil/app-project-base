<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{

    public function authorize(): bool
    {
        return false;
    }


    public static function rules(): array
    {
        return [
            'user_name' => ['required', 'unique:users,user_name', 'min:3', 'max:35'],
            'name' => ['required'],
            'password' => ['required', 'min:4', 'same:passwordConfirmation'],
            'mobile' => ['required', 'numeric', 'min_digits:10', 'max_digits:15', 'unique:users,mobile'],
           
        ];
    }
}

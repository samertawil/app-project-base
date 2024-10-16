<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StatusRequest extends FormRequest
{
  
    public function authorize(): bool
    {
        return true;
    }

 
    public static function rules($p_id_sub): array
    {
        return [
            'status_name' => ['required',
            Rule::unique('statuses')->where(function ($query) use ($p_id_sub)  {  
               return $query->where('p_id_sub',$p_id_sub);  
           }), 
       ], 
        ];
    }
}



 
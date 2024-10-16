<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;


class CityRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

   
    public static function rules($region_id): array
    {
       
        return [
            'region_id'=>['required'],
           'city_name'=>['required',
            Rule::unique('cities')->where(function ($query) use ($region_id) {
            return $query->where('region_id',$region_id);
           }) ,
           
           ]
        ];
    }
}



 
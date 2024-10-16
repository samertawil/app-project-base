<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class neighbourhoodRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public static function rules($city_id): array
    {
        return [
            'neighbourhood_name' => [
                'required',
                Rule::unique('neighbourhoods')->where(function ($query) use ($city_id) {
                    return $query->where('city_id', $city_id);
                }),
            ],
            'city_id' => ['required'],
          
        ];
    }
}

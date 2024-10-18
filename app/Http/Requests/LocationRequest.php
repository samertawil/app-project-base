<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class LocationRequest extends FormRequest
{
 
    public function authorize(): bool
    {
        return true;
    }
 
    public static function rules($neighbourhood_id): array
    {
        return [
            'location_name' => [
                'required',
                Rule::unique('locations')->where(function ($query) use ($neighbourhood_id) {
                    return $query->where('neighbourhood_id', $neighbourhood_id);
                }),
            ],
            'city_id' => ['required'],
            'neighbourhood_id' => ['required'],
            'region_id' => ['required'],
          
        ];
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddressNameVw extends Model
{
    use HasFactory;
    protected $table = 'address_name_vw';


    public function scopeNameSearch($query, $value)
    {

        if ($value) {
            return $query->where('city_name', 'like', "%{$value}%");
            // ->orwhere('region_name', 'like', "%{$value}%");
        }
    }


    public function scopeRegionListSearch($query, $value) {

        if($value) {
            return $query->where('region_id',$value);
        }

    }
    
    public function scopeCityListSearch($query, $value) {
        if($value) {
            return $query->where('city_id',$value);
        }
    } 
    
    public function scopeNeighbourhoodNameSearch($query, $value) {
        if($value) {
            return $query->where('neighbourhood_name','like',"%{$value}%");
        }
    } 

}
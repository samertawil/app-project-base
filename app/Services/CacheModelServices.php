<?php

namespace App\Services;

use App\Models\AddressNameVw;
use Illuminate\Support\Facades\Cache;
use Livewire\WithPagination;
 

class CacheModelServices
{

use WithPagination;
protected $paginationTheme ='bootstrap';
    public static function getRegionVwData()
    {

       return   Cache::rememberForever('ٌRegionVwData', function () {
          
                return   AddressNameVw::select('region_id', 'region_name')
                    ->groupby('region_id')
                    ->orderBy('region_id', 'DESC')
                    ->get();
             
        });
    }


    public static function getCityVwData()
    {
             
        return   Cache::rememberForever('CityVwData', function () {
            return   AddressNameVw::select('region_id', 'region_name', 'city_name', 'city_id')
                ->groupby('city_id')
                ->orderBy('city_id', 'DESC') 
                ->get();
               
        });
    }


    public static function getCityVwDataApi($groupBy='', $conditionCol='', $value='')
    {
             
        return   Cache::rememberForever('CityVwDataApi', function () use($groupBy, $conditionCol, $value) {
            return   AddressNameVw::select('region_id', 'region_name', 'city_name', 'city_id')->groupby($groupBy)
           ->where($conditionCol,$value)->get()->toArray();
           
              
               
        });
    }
}

 
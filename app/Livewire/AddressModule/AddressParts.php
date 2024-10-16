<?php

namespace App\Livewire\AddressModule;


use Livewire\Component;
use Livewire\Attributes\Title;
use App\Services\AddressNameServices;

class AddressParts extends Component
{

    public function  api_create_short_address($value='',$model='') {
        
        if ($model == 'region_id') {

        $cities =  AddressNameServices::getCityVwDataApi('city_id',$model,$value) ;
     
        return response($cities,200);
     }
       
    }

    #[Title('اجزاء العنوان')]
    public function render()
    {
   
        $TitlePage='اجزاء العنوان';
        return view('address.address-parts')->layoutData(['pageTitle'=>$TitlePage]);
    }
}

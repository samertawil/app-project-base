<?php

namespace App\Livewire\AddressModule;


use Livewire\Component;
use Livewire\Attributes\Title;
use App\Services\AddressNameServices;

class AddressParts extends Component
{

    public function  api_create_short_address($value = '', $model = '')
    {

        if ($model === 'region_id') {
            $groupBy = 'city_id';
        } elseif ($model === 'city_id') {
            $groupBy = 'neighbourhood_id';
        }

        $address =  AddressNameServices::getCityVwDataApi($groupBy, $model, $value);

        return response($address, 200);
    }

    #[Title('اجزاء العنوان')]
    public function render()
    {

        $TitlePage = 'اجزاء العنوان';
        return view('address.address-parts')->layoutData(['pageTitle' => $TitlePage]);
    }
}

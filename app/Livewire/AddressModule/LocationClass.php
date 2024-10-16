<?php

namespace App\Livewire\AddressModule;

use Livewire\Component;
use App\Traits\SortTrait;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use App\Models\AddressNameVw;
use App\Services\CacheModelServices;

class LocationClass extends Component
{


    use SortTrait ;

    #[Url(history:true)]
    public $sortBy='location_id';

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $neighbourhood_name;

    public $neighbourhood_id;

    public $location_name;

    public $city_id;

    public $region_id;

    #[Url(history: true)]
    public $perPage = 5;

    #[Url(history: true)]
    public $regionIdSearch;
    
    #[Url(history: true)]
    public $cityIdSearch;

    #[Url(history: true)]
    public $search;

    public $editNeighbourhoodId;

    public $editNeighbourhoodName;

    public $editLocationId;

    public $regionIdUpdate;

    public $cityIdUpdate;

    public $value;
 
   public function store() {

    dd(1);
   }


    public function render()
    {
                

         $cities  =   CacheModelServices::getCityVwData();
 
         $locations = AddressNameVw::groupby('location_id')
        ->orderBy($this->sortBy,$this->sortdir)
            // ->NeighbourhoodNameSearch($this->search)
            // ->RegionListSearch($this->regionIdSearch)
            // ->CityListSearch($this->cityIdSearch)
            ->paginate($this->perPage);


        return view('address.location',compact('cities','locations', ));
    }
}

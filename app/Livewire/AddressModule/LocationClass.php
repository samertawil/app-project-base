<?php

namespace App\Livewire\AddressModule;

use Livewire\Component;
use App\Models\Location;
use App\Traits\SortTrait;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use App\Models\AddressNameVw;
use App\Traits\FlashMsgTraits;
use Illuminate\Support\Facades\DB;
use App\Services\CacheModelServices;
use App\Http\Requests\LocationRequest;
 

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

   

    $this->validate(LocationRequest::rules($this->neighbourhood_id));

    Location::create([
        'location_name'=>$this->location_name,
        'neighbourhood_id'=>$this->neighbourhood_id,
    ]);

    $this->reset();

    $this->dispatch('reset-items');
    
    
   }
   public function destroy($id)
   {
       DB::beginTransaction();

       try {
        Location::destroy($id);
           DB::commit();
       } catch (\Exception $e) {
           FlashMsgTraits::created($msgType = 'error', $msg = 'لا يمكن حذف قيمة مرتبطة ببيانات اخرى');
           DB::rollBack();
       }
   }

    public function render()
    {
                
        $regions =  CacheModelServices::getRegionVwData();
         $cities  =   CacheModelServices::getCityVwData();
 
         $locations = AddressNameVw::groupby('location_id')
        ->orderBy($this->sortBy,$this->sortdir)
            ->LocationNameSearch($this->search)
              ->RegionListSearch($this->regionIdSearch)
              ->CityListSearch($this->cityIdSearch)
              ->paginate($this->perPage);

          
        return view('address.location',compact('cities','locations','regions' ));
    }
}

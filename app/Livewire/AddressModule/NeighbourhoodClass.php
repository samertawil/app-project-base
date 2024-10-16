<?php

namespace App\Livewire\AddressModule;

use App\Models\City;
use App\Models\Region;
use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use App\Models\AddressNameVw;
use App\Models\Neighbourhood;
use App\Traits\FlashMsgTraits;
use Illuminate\Support\Facades\DB;
use App\Services\CacheModelServices;
use App\Http\Requests\neighbourhoodRequest;
use App\Traits\SortTrait;

class NeighbourhoodClass extends Component
{
    use SortTrait ;

    #[Url(history:true)]
    public $sortBy='neighbourhood_id';

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $neighbourhood_name;

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

    public $regionIdUpdate;

    public $cityIdUpdate;

    public function store()
    {
        
        $this->validate(neighbourhoodRequest::rules($this->city_id));

        Neighbourhood::create([
            'neighbourhood_name' => $this->neighbourhood_name,
            'city_id' => $this->city_id,
        ]);

        $this->reset(['city_id', 'neighbourhood_name']);
    }

    public function edit($id)
    {
        $this->editNeighbourhoodId = $id;
        $data = Neighbourhood::findOrfail($id);
        $this->editNeighbourhoodName = $data->neighbourhood_name;
        $this->regionIdUpdate = $data->region_id;
        $this->cityIdUpdate = $data->city_id;
    }


    public function update()
    {

        $this->validate(neighbourhoodRequest::rules($this->city_id));

        $data = Neighbourhood::findOrfail($this->editNeighbourhoodId);

        $data->update([
            'neighbourhood_name'=>$this->editNeighbourhoodName,
            'city_id' => $this->cityIdUpdate,
            'region_id' => $this->regionIdUpdate,
        ]);

        $this->cancelEdit();
    }

    public function destroy($id)
    {
        DB::beginTransaction();

        try {
            Neighbourhood::destroy($id);
            DB::commit();
        } catch (\Exception $e) {
            FlashMsgTraits::created($msgType = 'error', $msg = 'لا يمكن حذف قيمة مرتبطة ببيانات اخرى');
            DB::rollBack();
        }
    }

    public function cancelEdit()
    {
        $this->reset('editNeighbourhoodId');
    }

    public function render()
    {
        
 
        $regions =Region::get(); 
        //  CacheModelServices::getRegionVwData();
        $cities =  CacheModelServices::getCityVwData();

        $neighbourhoods = AddressNameVw::groupby('neighbourhood_id')
        ->orderBy($this->sortBy,$this->sortdir)
            ->NeighbourhoodNameSearch($this->search)
            ->RegionListSearch($this->regionIdSearch)
            ->CityListSearch($this->cityIdSearch)
            ->paginate($this->perPage);

        return view('address.neighbourhood', compact('cities', 'regions', 'neighbourhoods'));
    }
}

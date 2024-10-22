<?php

namespace App\Livewire\AddressesModule;


use App\Models\City;
use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use App\Models\AddressNameVw;
use App\Traits\FlashMsgTraits;
use App\Http\Requests\CityRequest;
use Illuminate\Support\Facades\DB;
use App\Services\CacheModelServices;


class CityResource extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    protected $listeners = ['alterRegion' => '$refresh'];

    public $city_name;

    public $region_name;

    public $region_id;

    public $cityId;

    public $editCityName;

    #[Url(history: true)]
    public $perPage = 5;

    #[Url(history:true)]
    public $regionIdSearch;

    #[Url(history:true)]
    public $search;

    public $regionIdUpdate;

    public function store()
    {
        
        $this->validate(CityRequest::rules($this->region_id));

        City::create($this->all());

        $this->reset('city_name');

        $this->dispatch('refresh-city');
    }

    public function edit($id)
    {
        $this->cityId = $id;
        $data = City::findOrfail($id);
        $this->editCityName=$data->city_name;   
        $this->regionIdUpdate=$data->region_id;
      
    }


    public function update()
    { 
        $data = City::findOrfail( $this->cityId);
        $data->update([
            'city_name'=>$this->editCityName,
            'region_id'=>$this->regionIdUpdate,
        ]);
      
        $this->cancelEdit();

        $this->dispatch('refresh-city');
    }

    public function destroy($id)
    {
        DB::beginTransaction();

        try {
            City::destroy($id);
            DB::commit();
            $this->dispatch('refresh-city');
            
        } catch (\Exception $e) {
            FlashMsgTraits::created($msgType = 'error', $msg = 'لا يمكن حذف قيمة مرتبطة ببيانات اخرى');
            DB::rollBack();
        }
    }

    public function cancelEdit() {
        $this->reset('cityId');
    }
    public function render()
    {

        $cities = AddressNameVw::groupby('city_id')
            ->orderBy('city_id', 'DESC')
            ->NameSearch($this->search)
            ->RegionListSearch($this->regionIdSearch)
            ->paginate($this->perPage);

        $regions =  CacheModelServices::getRegionVwData();

 
        return view('livewire.addresses-module.city-resource', compact('regions', 'cities'));
    }
}
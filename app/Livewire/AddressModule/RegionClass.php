<?php

namespace App\Livewire\AddressModule;



use Exception;
use App\Models\Region;
use Livewire\Component;
use Livewire\Attributes\Rule;

use App\Traits\FlashMsgTraits;
use Illuminate\Support\Facades\DB;
use App\Services\CacheModelServices;


class RegionClass extends Component
{

   

    #[Rule(['required', 'unique:regions,region_name'])]
    public $region_name;

    public $regionId;

    public $regionName;

    public function store()
    {

        $this->validate();

        Region::create($this->all());

        $this->dispatch('alterRegion');
      
        $this->reset('region_name');
       
    }

    public function edit($id)
    {

        $this->regionId = $id;

        $data = Region::findOrfail($id);

        $this->regionName = $data->region_name;
    }

    public function update()
    {


        $data = Region::findOrfail($this->regionId);

        $this->validate([
            'regionName' => ['required', 'unique:regions,region_name'],
        ]);

        $data->update([
            'region_name'=>$this->regionName,
        ]);
        
         $this->dispatch('alterRegion');

         $this->cancelEdit();
    }

    public function cancelEdit()
    {

        $this->reset('regionId');
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {

            Region::destroy($id);

            DB::commit();

            $this->dispatch('alterRegion');

        } catch (Exception $e) {

            if ($e->getCode()  == 23000) {

                FlashMsgTraits::created($msgType = 'error', $msg = 'لا يمكن حذف قيمة مرتبطة ببيانات اخرى');
            } else {

                FlashMsgTraits::created($msgType = 'error', $msg =$e->getMessage());
            }

            DB::rollBack();
        }
    }

    public function render()
    {

        $regions =  CacheModelServices::getRegionVwData();

        return view('address.region', compact('regions'));
    }
}

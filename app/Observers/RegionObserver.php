<?php

namespace App\Observers;

use App\Livewire\AddressModule\RegionClass;
use App\Models\Region;
use App\Traits\FlashMsgTraits;
use App\Traits\ClearCacheTraits;

class RegionObserver
{
  
    use ClearCacheTraits;
    use FlashMsgTraits;
    
    public function created(Region $region): void
    {
      
        FlashMsgTraits::created();
        ClearCacheTraits::clearCache('ٌRegionVwData');
        ClearCacheTraits::clearCache('CityVwData');
        
    }

  
    public function updated(Region $region): void
    {
       
        FlashMsgTraits::created($msgType = 'success',$msg = 'update');
        ClearCacheTraits::clearCache('ٌRegionVwData');
        ClearCacheTraits::clearCache('CityVwData');

      
    }


    public function deleted(Region $region): void
    {
       
        ClearCacheTraits::clearCache('ٌRegionVwData');
        ClearCacheTraits::clearCache('CityVwData');
    }

  
    public function restored(Region $region): void
    {
        //
    }


    public function forceDeleted(Region $region): void
    {
        //
    }
}

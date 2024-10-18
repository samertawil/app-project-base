<?php

namespace App\Observers;

use App\Models\City;
use App\Traits\FlashMsgTraits;
use App\Traits\ClearCacheTraits;

class CityObserver
{

    use ClearCacheTraits;
   
    public function created(City $city): void
    {
         FlashMsgTraits::created();
         ClearCacheTraits::clearCache('CityVwData');
       
    }

  
    public function updated(City $city): void
    {
        FlashMsgTraits::created($msgType = 'success',$msg = 'update');
        ClearCacheTraits::clearCache('CityVwData');
    }

 
    public function deleted(City $city): void
    {
       
        ClearCacheTraits::clearCache('CityVwData');
    }

 
    public function restored(City $city): void
    {
        //
    }

  
    public function forceDeleted(City $city): void
    {
        //
    }
}

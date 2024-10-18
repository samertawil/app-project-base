<?php

namespace App\Observers;

use App\Models\Location;
use App\Traits\FlashMsgTraits;

class LocationObserver
{
   
    public function created(Location $location): void
    {
        FlashMsgTraits::created();
    }

   
    public function updated(Location $location): void
    {
        FlashMsgTraits::created($msgType = 'success',$msg = 'update');
    }

  
    public function deleted(Location $location): void
    {
        FlashMsgTraits::created($msgType = 'success',$msg = 'destroy');
    }

    
    public function restored(Location $location): void
    {
        //
    }

   
    public function forceDeleted(Location $location): void
    {
        //
    }
}

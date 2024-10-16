<?php

namespace App\Observers;

use App\Models\status;
use App\Traits\FlashMsgTraits;
use App\Traits\ClearCacheTraits;
use Illuminate\Support\Facades\Cache;
 
 

class StatusObservers
{
 
  
    public function created(status $status): void
    {
   
        FlashMsgTraits::created();
        ClearCacheTraits::clearCache('statusData');
    }


    public function updated(status $status): void
    {
        FlashMsgTraits::created($msgType = 'success',$msg = 'update');
        ClearCacheTraits::clearCache('statusData');
    }

 
    public function deleted(status $status): void
    {
        ClearCacheTraits::clearCache('statusData');
    }

  
    public function restored(status $status): void
    {
        //
    }


    public function forceDeleted(status $status): void
    {
        //
    }
}

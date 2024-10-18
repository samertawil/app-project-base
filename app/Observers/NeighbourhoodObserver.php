<?php

namespace App\Observers;

use App\Models\Neighbourhood;
use App\Traits\FlashMsgTraits;

class NeighbourhoodObserver
{
    
    public function created(Neighbourhood $neighbourhood): void
    {
        
        FlashMsgTraits::created();
    }

    
    public function updated(Neighbourhood $neighbourhood): void
    {
        FlashMsgTraits::created($msgType = 'success',$msg = 'update');
    }

   
    public function deleted(Neighbourhood $neighbourhood): void
    {
        FlashMsgTraits::created($msgType = 'success',$msg = 'destroy');
    }

   
    public function restored(Neighbourhood $neighbourhood): void
    {
        //
    }

   
    public function forceDeleted(Neighbourhood $neighbourhood): void
    {
        //
    }
}

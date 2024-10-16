<?php

namespace App\Observers;

use App\Models\ability;
use App\Traits\FlashMsgTraits;

class AbilityObserver
{
 
    public function created(ability $ability): void
    {
        FlashMsgTraits::created();
    }

 
    public function updated(ability $ability): void
    {
        FlashMsgTraits::created($msgType = 'success',$msg = 'update');
       
    }

 
    public function deleted(ability $ability): void
    {
        //
    }
 
    public function restored(ability $ability): void
    {
        //
    }

   
    public function forceDeleted(ability $ability): void
    {
        //
    }
}

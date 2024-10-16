<?php

namespace App\Observers;

use App\Models\User;
use App\Traits\FlashMsgTraits;

class UserObserver
{
 
    public function created(User $user): void
    {
        FlashMsgTraits::created();
    }

   
    public function updated(User $user): void
    {
        FlashMsgTraits::created($msgType = 'success',$msg = 'update');
    }

  
    public function deleted(User $user): void
    {
        //
    }

    /**
     * Handle the User "restored" event.
     */
    public function restored(User $user): void
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     */
    public function forceDeleted(User $user): void
    {
        //
    }
}

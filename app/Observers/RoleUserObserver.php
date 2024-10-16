<?php

namespace App\Observers;

use App\Models\RoleUser;
use App\Traits\FlashMsgTraits;

class RoleUserObserver
{
  
    public function created(RoleUser $roleUser): void
    {
        FlashMsgTraits::created();
    }

  
    public function updated(RoleUser $roleUser): void
    {
        //
    }

 
    public function deleted(RoleUser $roleUser): void
    {
        //
    }

    /**
     * Handle the RoleUser "restored" event.
     */
    public function restored(RoleUser $roleUser): void
    {
        //
    }

    /**
     * Handle the RoleUser "force deleted" event.
     */
    public function forceDeleted(RoleUser $roleUser): void
    {
        //
    }
}

<?php

namespace App\Observers;

use App\Models\Role;
use App\Traits\FlashMsgTraits;

class RoleObserver
{
   
    public function created(Role $role): void
    {
        FlashMsgTraits::created();
    }

    
    public function updated(Role $role): void
    {
        FlashMsgTraits::created($msgType = 'success',$msg = 'update');
    }

    /**
     * Handle the Role "deleted" event.
     */
    public function deleted(Role $role): void
    {
        //
    }

    /**
     * Handle the Role "restored" event.
     */
    public function restored(Role $role): void
    {
        //
    }

    /**
     * Handle the Role "force deleted" event.
     */
    public function forceDeleted(Role $role): void
    {
        //
    }
}

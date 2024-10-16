<?php

namespace App\Observers;

use App\Models\SettingSystem;
use Illuminate\Support\Facades\Cache;

class SystemNameObservers
{
   

    public function forgetCache() {
        Cache::forget('systemName');
    }

    public function created(SettingSystem $settingSystem): void
    {
        Cache::forget('systemName');
    }

  
    public function updated(SettingSystem $settingSystem): void
    {
        //
    }

 
    public function deleted(SettingSystem $settingSystem): void
    {
        //
    }

   
    public function restored(SettingSystem $settingSystem): void
    {
        //
    }

    /**
     * Handle the SettingSystem "force deleted" event.
     */
    public function forceDeleted(SettingSystem $settingSystem): void
    {
        //
    }
}

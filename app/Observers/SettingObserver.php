<?php

namespace App\Observers;

use App\Models\Setting;
use App\Traits\FlashMsgTraits;
use App\Traits\ClearCacheTraits;
use Illuminate\Support\Facades\Cache;

class SettingObserver
{
 
    public function created(Setting $setting): void
    {
        FlashMsgTraits::created();
        ClearCacheTraits::clearCache('settingData');
    }

  
    public function updated(Setting $setting): void
    {
        FlashMsgTraits::created($msgType = 'success',$msg = 'update');
        ClearCacheTraits::clearCache('settingData');
    }

   
    public function deleted(Setting $setting): void
    {
        ClearCacheTraits::clearCache('settingData');
    }

   
    public function restored(Setting $setting): void
    {
        //
    }

  
    public function forceDeleted(Setting $setting): void
    {
        //
    }
}

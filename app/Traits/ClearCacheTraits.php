<?php

namespace App\Traits;

use Illuminate\Support\Facades\Cache;

trait ClearCacheTraits
{

    public static function clearCache($cacheName)  {
        Cache::forget($cacheName);
    }
    
}

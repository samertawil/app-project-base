<?php

namespace App\Providers;


use App\Models\Role;
use App\Models\User;
use App\Models\Region;
use App\Models\Status;
use App\Models\Ability;
use App\Models\Setting;
use App\Models\RoleUser;
use App\Models\Neighbourhood;
use App\Observers\RoleObserver;
use App\Observers\UserObserver;
use App\Observers\RegionObserver;
use App\Observers\AbilityObserver;
use App\Observers\SettingObserver;
use App\Observers\StatusObservers;
use App\Observers\RoleUserObserver;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use App\Observers\NeighbourhoodObserver;

class AppServiceProvider extends ServiceProvider
{
   
    public function register(): void
    {
        //
    }
 
    public function boot(): void
    {

        Status::observe(StatusObservers::class);
        Ability::observe(AbilityObserver::class);
        Role::observe(RoleObserver::class);
        User::observe(UserObserver::class);
        RoleUser::observe(RoleUserObserver::class);
        Setting::observe(SettingObserver::class);
        Region::observe(RegionObserver::class);
        Neighbourhood::observe(NeighbourhoodObserver::class);

        foreach (Ability::get() as $data) {

            Gate::define($data->ability_name, function ($user) use ($data) {

                foreach ($user->rolesRelation as $role) {

                    if (in_array(($data->ability_name), $role->abilities)) {

                        return true;
                    }
                }
                return false;
            });
        }
    }
}
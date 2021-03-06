<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin', function () {
            $user = Auth::user();
           foreach ($user->roles as $role){
               if ($role->name==='admin'){
                   return true;
               }
               return false;
           }
        });
        /*Gate::define('user', function () {
            $user = Auth::user();
            if ( !$user->role->role_id== 2) {
                return true;
            }
            return false;
        });*/
    }

}

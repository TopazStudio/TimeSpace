<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Relation::morphMap([
            'user' => 'App\Models\User',
            'group' => 'App\Models\Group',
            'organization' => 'App\Models\Organization',
            'meeting' => 'App\Models\Meeting',
            'examination' => 'App\Models\Examination',
            'clazz' => 'App\Models\Clazz'
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

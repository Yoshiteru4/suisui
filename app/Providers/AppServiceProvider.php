<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema; //この一行を追加
use Illuminate\Support\ServiceProvider;
// use Payjp\Payjp;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Payjp::setApiKey(config('payjp.secret_key'));
        Schema::defaultStringLength(191);// この一行を追加
    }
}

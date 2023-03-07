<?php

namespace App\Providers;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
     * @param UrlGenerator $url
     * @return void
     */
    public function boot(UrlGenerator $url)
    {
      Schema::defaultStringLength(191);
      Model::unguard();
        if (env('APP_ENV') == 'production') {
            $url->forceScheme('https');
        }
    }
}

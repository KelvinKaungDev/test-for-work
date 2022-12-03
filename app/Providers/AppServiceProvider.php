<?php

namespace App\Providers;

use App\Providers\Service\PostcardSendingService;
use Illuminate\Support\ServiceProvider;

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
        $this -> app -> singleton('Postcard', function ($app) {
            return new PostcardSendingService('Canada', 4, 10);
        });
    }
}

<?php

namespace Guicunha\Locawebmailmarketing;

use Illuminate\Support\ServiceProvider;

class LocawebMailProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Guicunha\Locawebmailmarketing\LocawebMailController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }
}

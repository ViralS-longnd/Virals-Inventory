<?php

namespace ViralsPackage\ViralsInventory;

use Illuminate\Support\ServiceProvider;

class ViralsInventoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/base.php');

        $this->loadRoutesFrom(__DIR__.'/routes/inventory.php');

        $this->loadViewsFrom(__DIR__.'/resources/views', 'virals-inventory');

        $this->publishes([
            __DIR__.'/public' => public_path('vendor/viralsoft-inventory'),
        ], 'public');
    }
}

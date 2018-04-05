<?php
namespace Muabazalm\Menu;

use Illuminate\Support\ServiceProvider;

/**
 *
 */
class MenyServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');

        $this->loadViewsFrom(__DIR__ . '/views', 'muabazalm.menu');
    }

    public function register()
    {
        $this->app->bind('muabazalm.menu', function () {
            return new Menu();
        });
    }
}

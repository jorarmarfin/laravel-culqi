<?php

namespace JorarMarfin\LaravelCulqi;

use Illuminate\Support\Facades\App;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use JorarMarfin\LaravelCulqi\Controllers\MainController;

class LaravelCulqiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('LaravelCulqi', function()
        {
            return new MainController;
        });
        App::booting( function()
        {
            $loader = AliasLoader::getInstance();
            $loader->alias('LaravelCulqi', 'JorarMarfin\LaravelCulqi\Facades\LaravelCulqiFacade');
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

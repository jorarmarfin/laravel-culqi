<?php

namespace JorarMarfin\LaravelCulqi\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelCulqiFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'LaravelCulqi';
    }
}

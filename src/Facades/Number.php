<?php

namespace Epigra\LaravelInt\Facades;

use Illuminate\Support\Facades\Facade;

class Number extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'intl.number';
    }
}

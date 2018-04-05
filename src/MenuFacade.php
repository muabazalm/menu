<?php

namespace Muabazalm\Menu;

use Illuminate\Support\Facades\Facade;

/**
 *
 */
class MenuFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'muabazalm.menu';
    }
}

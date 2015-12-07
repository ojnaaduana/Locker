<?php

/*
 * This file is part of Alt Three Locker.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AltThree\Locker\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * This is the locker facade class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class Locker extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'locker';
    }
}

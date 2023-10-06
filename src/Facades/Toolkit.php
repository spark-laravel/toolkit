<?php

namespace SparkLaravel\Toolkit\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SparkLaravel\Toolkit\Toolkit
 */
class Toolkit extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \SparkLaravel\Toolkit\Toolkit::class;
    }
}

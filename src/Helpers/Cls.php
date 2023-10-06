<?php

namespace SparkLaravel\Toolkit\Helpers;

use Illuminate\Support\Arr;

class Cls
{
    /**
     * @param string $class
     * @param string|array $traits
     * @param bool $strict
     * @return bool
     */
    public static function usesTraits(string $class, string|array $traits, bool $strict = true): bool
    {
        if (!class_exists($class)) {
            return false;   // Observe class doesn't exists
        }

        $recursives = class_uses_recursive($class);

        return $strict ? Arr::has($recursives, $traits) : Arr::hasAny($recursives, $traits);
    }

    public static function usesAnyTraits(string $class, string|array $traits): bool
    {
        return self::usesTraits($class, $traits, false);
    }    
}
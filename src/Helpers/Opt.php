<?php

namespace SparkLaravel\Toolkit\Helpers;

use Illuminate\Support\Arr;
use Spatie\LaravelOptions\Options as SpatieLaravelOptions;
use Spatie\Enum\Laravel\Enum;

class Opt
{
    protected $source;

    protected function __construct($source)
    {
        $this->source = $source;
    }

    public static function for($object): array
    {
        $option = new static($object);


        if (is_subclass_of($option->source, Enum::class)) {
            return $option->fromEnum($option->source);
        }

        return [
            'get xxx as input'
        ];
    }

    /**
     * Convert a Enum class to options array
     * 
     * @return array
     */
    public function fromEnum(string $object): array
    {
        return collect(SpatieLaravelOptions::forEnum($object)->toArray())
            ->mapWithKeys(function ($item) {
                return [$item['value'] => $item['label']];
            })
            ->toArray();
    }

}

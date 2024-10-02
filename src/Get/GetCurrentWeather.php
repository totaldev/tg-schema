<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Location\Location;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns the current weather in the given location.
 */
class GetCurrentWeather extends TdFunction
{
    public const TYPE_NAME = 'getCurrentWeather';

    public function __construct(
        /**
         * The location.
         */
        protected Location $location
    ) {}

    public static function fromArray(array $array): GetCurrentWeather
    {
        return new static(
            TdSchemaRegistry::fromArray($array['location']),
        );
    }

    public function getLocation(): Location
    {
        return $this->location;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'location' => $this->location->typeSerialize(),
        ];
    }
}

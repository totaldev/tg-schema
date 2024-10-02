<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Location\Location;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes the location of the current user. Needs to be called if getOption("is_location_visible") is true and location changes for more than 1 kilometer.
 * Must not be called if the user has a business location.
 */
class SetLocation extends TdFunction
{
    public const TYPE_NAME = 'setLocation';

    public function __construct(
        /**
         * The new location of the user.
         */
        protected Location $location
    ) {}

    public static function fromArray(array $array): SetLocation
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

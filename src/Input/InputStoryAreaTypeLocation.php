<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Location\Location;
use Totaldev\TgSchema\Location\LocationAddress;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * An area pointing to a location.
 */
class InputStoryAreaTypeLocation extends InputStoryAreaType
{
    public const TYPE_NAME = 'inputStoryAreaTypeLocation';

    public function __construct(
        /**
         * The location.
         */
        protected Location        $location,
        /**
         * Address of the location; pass null if unknown.
         */
        protected LocationAddress $address,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputStoryAreaTypeLocation
    {
        return new static(
            TdSchemaRegistry::fromArray($array['location']),
            TdSchemaRegistry::fromArray($array['address']),
        );
    }

    public function getAddress(): LocationAddress
    {
        return $this->address;
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
            'address'  => $this->address->typeSerialize(),
        ];
    }
}

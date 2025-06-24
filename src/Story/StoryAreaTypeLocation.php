<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

use Totaldev\TgSchema\Location\Location;
use Totaldev\TgSchema\Location\LocationAddress;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * An area pointing to a location.
 */
class StoryAreaTypeLocation extends StoryAreaType
{
    public const TYPE_NAME = 'storyAreaTypeLocation';

    public function __construct(
        /**
         * The location.
         */
        protected Location         $location,
        /**
         * Address of the location; may be null if unknown.
         */
        protected ?LocationAddress $address
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StoryAreaTypeLocation
    {
        return new static(
            TdSchemaRegistry::fromArray($array['location']),
            isset($array['address']) ? TdSchemaRegistry::fromArray($array['address']) : null,
        );
    }

    public function getAddress(): ?LocationAddress
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
            'address'  => $this->address ?? null,
        ];
    }
}

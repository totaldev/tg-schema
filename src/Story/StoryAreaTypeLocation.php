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
    public const string TYPE_NAME = 'storyAreaTypeLocation';

    public function __construct(
        /**
         * Address of the location; may be null if unknown.
         */
        protected ?LocationAddress $address,
        /**
         * The location.
         */
        protected Location         $location,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StoryAreaTypeLocation
    {
        return new static(
            address : (isset($array['address']) ? TdSchemaRegistry::fromArray($array['address']) : null),
            location: TdSchemaRegistry::fromArray($array['location']),
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

    public function setAddress(?LocationAddress $value): static
    {
        $this->address = $value;

        return $this;
    }

    public function setLocation(Location $value): static
    {
        $this->location = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'address'  => (null !== $this->address ? $this->address->jsonSerialize() : null),
            'location' => $this->location->jsonSerialize(),
        ];
    }
}

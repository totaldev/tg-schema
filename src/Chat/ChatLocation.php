<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\Location\Location;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a location to which a chat is connected.
 */
class ChatLocation extends TdObject
{
    public const string TYPE_NAME = 'chatLocation';

    public function __construct(
        /**
         * Location address; 1-64 characters, as defined by the chat owner.
         */
        protected string   $address,
        /**
         * The location.
         */
        protected Location $location,
    ) {}

    public static function fromArray(array $array): ChatLocation
    {
        return new static(
            address : $array['address'],
            location: TdSchemaRegistry::fromArray($array['location']),
        );
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getLocation(): Location
    {
        return $this->location;
    }

    public function setAddress(string $value): static
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
            'address'  => $this->address,
            'location' => $this->location->jsonSerialize(),
        ];
    }
}

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
         * The location.
         */
        protected Location $location,
        /**
         * Location address; 1-64 characters, as defined by the chat owner.
         */
        protected string   $address,
    ) {}

    public static function fromArray(array $array): ChatLocation
    {
        return new static(
            TdSchemaRegistry::fromArray($array['location']),
            $array['address'],
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
            'location' => $this->location->typeSerialize(),
            'address'  => $this->address,
        ];
    }
}

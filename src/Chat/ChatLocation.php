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
    public const TYPE_NAME = 'chatLocation';

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

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'location' => $this->location->typeSerialize(),
            'address'  => $this->address,
        ];
    }
}

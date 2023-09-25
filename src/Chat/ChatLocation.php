<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\Location\Location;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a location to which a chat is connected
 */
class ChatLocation extends TdObject
{
    public const TYPE_NAME = 'chatLocation';

    /**
     * Location address; 1-64 characters, as defined by the chat owner
     *
     * @var string
     */
    protected string $address;

    /**
     * The location
     *
     * @var Location
     */
    protected Location $location;

    public function __construct(Location $location, string $address)
    {
        $this->location = $location;
        $this->address = $address;
    }

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
            '@type' => static::TYPE_NAME,
            'location' => $this->location->typeSerialize(),
            'address' => $this->address,
        ];
    }
}

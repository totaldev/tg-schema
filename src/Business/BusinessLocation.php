<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Business;

use Totaldev\TgSchema\Location\Location;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a location of a business.
 */
class BusinessLocation extends TdObject
{
    public const TYPE_NAME = 'businessLocation';

    public function __construct(
        /**
         * The location; may be null if not specified.
         */
        protected ?Location $location,
        /**
         * Location address; 1-96 characters.
         */
        protected string    $address
    ) {}

    public static function fromArray(array $array): BusinessLocation
    {
        return new static(
            isset($array['location']) ? TdSchemaRegistry::fromArray($array['location']) : null,
            $array['address'],
        );
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getLocation(): ?Location
    {
        return $this->location;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'location' => (isset($this->location) ? $this->location : null),
            'address'  => $this->address,
        ];
    }
}

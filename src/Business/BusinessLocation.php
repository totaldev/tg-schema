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
    public const string TYPE_NAME = 'businessLocation';

    public function __construct(
        /**
         * Location address; 1-96 characters.
         */
        protected string    $address,
        /**
         * The location; may be null if not specified.
         */
        protected ?Location $location,
    ) {}

    public static function fromArray(array $array): BusinessLocation
    {
        return new static(
            address : $array['address'],
            location: (isset($array['location']) ? TdSchemaRegistry::fromArray($array['location']) : null),
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

    public function setAddress(string $value): static
    {
        $this->address = $value;

        return $this;
    }

    public function setLocation(?Location $value): static
    {
        $this->location = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'address'  => $this->address,
            'location' => (null !== $this->location ? $this->location->jsonSerialize() : null),
        ];
    }
}

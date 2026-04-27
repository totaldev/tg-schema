<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Venue;

use Totaldev\TgSchema\Location\Location;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a venue.
 */
class Venue extends TdObject
{
    public const string TYPE_NAME = 'venue';

    public function __construct(
        /**
         * Venue address; as defined by the sender.
         */
        protected string   $address,
        /**
         * Identifier of the venue in the provider database; as defined by the sender.
         */
        protected string   $id,
        /**
         * Venue location; as defined by the sender.
         */
        protected Location $location,
        /**
         * Provider of the venue database; as defined by the sender. Currently, only "foursquare" and "gplaces" (Google Places) need to be supported.
         */
        protected string   $provider,
        /**
         * Venue name; as defined by the sender.
         */
        protected string   $title,
        /**
         * Type of the venue in the provider database; as defined by the sender.
         */
        protected string   $type,
    ) {}

    public static function fromArray(array $array): Venue
    {
        return new static(
            address : $array['address'],
            id      : $array['id'],
            location: TdSchemaRegistry::fromArray($array['location']),
            provider: $array['provider'],
            title   : $array['title'],
            type    : $array['type'],
        );
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getLocation(): Location
    {
        return $this->location;
    }

    public function getProvider(): string
    {
        return $this->provider;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setAddress(string $value): static
    {
        $this->address = $value;

        return $this;
    }

    public function setId(string $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setLocation(Location $value): static
    {
        $this->location = $value;

        return $this;
    }

    public function setProvider(string $value): static
    {
        $this->provider = $value;

        return $this;
    }

    public function setTitle(string $value): static
    {
        $this->title = $value;

        return $this;
    }

    public function setType(string $value): static
    {
        $this->type = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'address'  => $this->address,
            'id'       => $this->id,
            'location' => $this->location->jsonSerialize(),
            'provider' => $this->provider,
            'title'    => $this->title,
            'type'     => $this->type,
        ];
    }
}

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
    public const TYPE_NAME = 'venue';

    public function __construct(
        /**
         * Venue location; as defined by the sender.
         */
        protected Location $location,
        /**
         * Venue name; as defined by the sender.
         */
        protected string   $title,
        /**
         * Venue address; as defined by the sender.
         */
        protected string   $address,
        /**
         * Provider of the venue database; as defined by the sender. Currently, only "foursquare" and "gplaces" (Google Places) need to be supported.
         */
        protected string   $provider,
        /**
         * Identifier of the venue in the provider database; as defined by the sender.
         */
        protected string   $id,
        /**
         * Type of the venue in the provider database; as defined by the sender.
         */
        protected string   $type,
    ) {}

    public static function fromArray(array $array): Venue
    {
        return new static(
            TdSchemaRegistry::fromArray($array['location']),
            $array['title'],
            $array['address'],
            $array['provider'],
            $array['id'],
            $array['type'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'location' => $this->location->typeSerialize(),
            'title'    => $this->title,
            'address'  => $this->address,
            'provider' => $this->provider,
            'id'       => $this->id,
            'type'     => $this->type,
        ];
    }
}

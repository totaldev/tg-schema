<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Location;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a location on planet Earth.
 */
class Location extends TdObject
{
    public const string TYPE_NAME = 'location';

    public function __construct(
        /**
         * The estimated horizontal accuracy of the location, in meters; as defined by the sender. 0 if unknown.
         */
        protected float $horizontalAccuracy,
        /**
         * Latitude of the location in degrees; as defined by the sender.
         */
        protected float $latitude,
        /**
         * Longitude of the location, in degrees; as defined by the sender.
         */
        protected float $longitude,
    ) {}

    public static function fromArray(array $array): Location
    {
        return new static(
            horizontalAccuracy: $array['horizontal_accuracy'],
            latitude          : $array['latitude'],
            longitude         : $array['longitude'],
        );
    }

    public function getHorizontalAccuracy(): float
    {
        return $this->horizontalAccuracy;
    }

    public function getLatitude(): float
    {
        return $this->latitude;
    }

    public function getLongitude(): float
    {
        return $this->longitude;
    }

    public function setHorizontalAccuracy(float $value): static
    {
        $this->horizontalAccuracy = $value;

        return $this;
    }

    public function setLatitude(float $value): static
    {
        $this->latitude = $value;

        return $this;
    }

    public function setLongitude(float $value): static
    {
        $this->longitude = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'horizontal_accuracy' => $this->horizontalAccuracy,
            'latitude'            => $this->latitude,
            'longitude'           => $this->longitude,
        ];
    }
}

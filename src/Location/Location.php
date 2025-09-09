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
    public const TYPE_NAME = 'location';

    public function __construct(
        /**
         * Latitude of the location in degrees; as defined by the sender.
         */
        protected float $latitude,
        /**
         * Longitude of the location, in degrees; as defined by the sender.
         */
        protected float $longitude,
        /**
         * The estimated horizontal accuracy of the location, in meters; as defined by the sender. 0 if unknown.
         */
        protected float $horizontalAccuracy,
    ) {}

    public static function fromArray(array $array): Location
    {
        return new static(
            $array['latitude'],
            $array['longitude'],
            $array['horizontal_accuracy'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'latitude'            => $this->latitude,
            'longitude'           => $this->longitude,
            'horizontal_accuracy' => $this->horizontalAccuracy,
        ];
    }
}

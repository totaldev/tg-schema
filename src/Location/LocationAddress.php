<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Location;

use Totaldev\TgSchema\TdObject;

/**
 * Describes an address of a location.
 */
class LocationAddress extends TdObject
{
    public const TYPE_NAME = 'locationAddress';

    public function __construct(
        /**
         * A two-letter ISO 3166-1 alpha-2 country code.
         */
        protected string $countryCode,
        /**
         * State, if applicable; empty if unknown.
         */
        protected string $state,
        /**
         * City; empty if unknown.
         */
        protected string $city,
        /**
         * The address; empty if unknown.
         */
        protected string $street
    ) {}

    public static function fromArray(array $array): LocationAddress
    {
        return new static(
            $array['country_code'],
            $array['state'],
            $array['city'],
            $array['street'],
        );
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'country_code' => $this->countryCode,
            'state'        => $this->state,
            'city'         => $this->city,
            'street'       => $this->street,
        ];
    }
}

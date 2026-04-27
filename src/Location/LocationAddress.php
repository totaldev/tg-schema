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
    public const string TYPE_NAME = 'locationAddress';

    public function __construct(
        /**
         * City; empty if unknown.
         */
        protected string $city,
        /**
         * A two-letter ISO 3166-1 alpha-2 country code.
         */
        protected string $countryCode,
        /**
         * State, if applicable; empty if unknown.
         */
        protected string $state,
        /**
         * The address; empty if unknown.
         */
        protected string $street,
    ) {}

    public static function fromArray(array $array): LocationAddress
    {
        return new static(
            city       : $array['city'],
            countryCode: $array['country_code'],
            state      : $array['state'],
            street     : $array['street'],
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

    public function setCity(string $value): static
    {
        $this->city = $value;

        return $this;
    }

    public function setCountryCode(string $value): static
    {
        $this->countryCode = $value;

        return $this;
    }

    public function setState(string $value): static
    {
        $this->state = $value;

        return $this;
    }

    public function setStreet(string $value): static
    {
        $this->street = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'city'         => $this->city,
            'country_code' => $this->countryCode,
            'state'        => $this->state,
            'street'       => $this->street,
        ];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Address;

use Totaldev\TgSchema\TdObject;

/**
 * Describes an address.
 */
class Address extends TdObject
{
    public const TYPE_NAME = 'address';

    public function __construct(
        /**
         * A two-letter ISO 3166-1 alpha-2 country code.
         */
        protected string $countryCode,
        /**
         * State, if applicable.
         */
        protected string $state,
        /**
         * City.
         */
        protected string $city,
        /**
         * First line of the address.
         */
        protected string $streetLine1,
        /**
         * Second line of the address.
         */
        protected string $streetLine2,
        /**
         * Address postal code.
         */
        protected string $postalCode,
    ) {}

    public static function fromArray(array $array): Address
    {
        return new static(
            $array['country_code'],
            $array['state'],
            $array['city'],
            $array['street_line1'],
            $array['street_line2'],
            $array['postal_code'],
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

    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function getStreetLine1(): string
    {
        return $this->streetLine1;
    }

    public function getStreetLine2(): string
    {
        return $this->streetLine2;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'country_code' => $this->countryCode,
            'state'        => $this->state,
            'city'         => $this->city,
            'street_line1' => $this->streetLine1,
            'street_line2' => $this->streetLine2,
            'postal_code'  => $this->postalCode,
        ];
    }
}

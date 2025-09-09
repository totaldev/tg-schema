<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Phone;

use Totaldev\TgSchema\Country\CountryInfo;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about a phone number.
 */
class PhoneNumberInfo extends TdObject
{
    public const TYPE_NAME = 'phoneNumberInfo';

    public function __construct(
        /**
         * Information about the country to which the phone number belongs; may be null.
         */
        protected ?CountryInfo $country,
        /**
         * The part of the phone number denoting country calling code or its part.
         */
        protected string       $countryCallingCode,
        /**
         * The phone number without country calling code formatted accordingly to local rules. Expected digits are returned as '-', but even more digits might be entered by the user.
         */
        protected string       $formattedPhoneNumber,
        /**
         * True, if the phone number was bought at https://fragment.com and isn't tied to a SIM card. Information about the phone number can be received using getCollectibleItemInfo.
         */
        protected bool         $isAnonymous,
    ) {}

    public static function fromArray(array $array): PhoneNumberInfo
    {
        return new static(
            isset($array['country']) ? TdSchemaRegistry::fromArray($array['country']) : null,
            $array['country_calling_code'],
            $array['formatted_phone_number'],
            $array['is_anonymous'],
        );
    }

    public function getCountry(): ?CountryInfo
    {
        return $this->country;
    }

    public function getCountryCallingCode(): string
    {
        return $this->countryCallingCode;
    }

    public function getFormattedPhoneNumber(): string
    {
        return $this->formattedPhoneNumber;
    }

    public function getIsAnonymous(): bool
    {
        return $this->isAnonymous;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'country'                => $this->country ?? null,
            'country_calling_code'   => $this->countryCallingCode,
            'formatted_phone_number' => $this->formattedPhoneNumber,
            'is_anonymous'           => $this->isAnonymous,
        ];
    }
}

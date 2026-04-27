<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Country;

use Totaldev\TgSchema\TdObject;

/**
 * Contains information about a country.
 */
class CountryInfo extends TdObject
{
    public const string TYPE_NAME = 'countryInfo';

    public function __construct(
        /**
         * List of country calling codes.
         *
         * @var string[]
         */
        protected array  $callingCodes,
        /**
         * A two-letter ISO 3166-1 alpha-2 country code.
         */
        protected string $countryCode,
        /**
         * English name of the country.
         */
        protected string $englishName,
        /**
         * True, if the country must be hidden from the list of all countries.
         */
        protected bool   $isHidden,
        /**
         * Native name of the country.
         */
        protected string $name,
    ) {}

    public static function fromArray(array $array): CountryInfo
    {
        return new static(
            callingCodes: $array['calling_codes'],
            countryCode : $array['country_code'],
            englishName : $array['english_name'],
            isHidden    : $array['is_hidden'],
            name        : $array['name'],
        );
    }

    public function getCallingCodes(): array
    {
        return $this->callingCodes;
    }

    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    public function getEnglishName(): string
    {
        return $this->englishName;
    }

    public function getIsHidden(): bool
    {
        return $this->isHidden;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setCallingCodes(array $value): static
    {
        $this->callingCodes = $value;

        return $this;
    }

    public function setCountryCode(string $value): static
    {
        $this->countryCode = $value;

        return $this;
    }

    public function setEnglishName(string $value): static
    {
        $this->englishName = $value;

        return $this;
    }

    public function setIsHidden(bool $value): static
    {
        $this->isHidden = $value;

        return $this;
    }

    public function setName(string $value): static
    {
        $this->name = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'calling_codes' => $this->callingCodes,
            'country_code'  => $this->countryCode,
            'english_name'  => $this->englishName,
            'is_hidden'     => $this->isHidden,
            'name'          => $this->name,
        ];
    }
}

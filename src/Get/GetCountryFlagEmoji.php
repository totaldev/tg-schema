<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns an emoji for the given country. Returns an empty string on failure. Can be called synchronously.
 */
class GetCountryFlagEmoji extends TdFunction
{
    public const TYPE_NAME = 'getCountryFlagEmoji';

    public function __construct(
        /**
         * A two-letter ISO 3166-1 alpha-2 country code as received from getCountries.
         */
        protected string $countryCode
    ) {}

    public static function fromArray(array $array): GetCountryFlagEmoji
    {
        return new static(
            $array['country_code'],
        );
    }

    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'country_code' => $this->countryCode,
        ];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns an IETF language tag of the language preferred in the country, which must be used to fill native fields in Telegram Passport personal details.
 * Returns a 404 error if unknown.
 */
class GetPreferredCountryLanguage extends TdFunction
{
    public const TYPE_NAME = 'getPreferredCountryLanguage';

    public function __construct(
        /**
         * A two-letter ISO 3166-1 alpha-2 country code.
         */
        protected string $countryCode
    ) {}

    public static function fromArray(array $array): GetPreferredCountryLanguage
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

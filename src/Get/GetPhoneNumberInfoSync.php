<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns information about a phone number by its prefix synchronously. getCountries must be called at least once after changing localization to the specified
 * language if properly localized country information is expected. Can be called synchronously.
 */
class GetPhoneNumberInfoSync extends TdFunction
{
    public const string TYPE_NAME = 'getPhoneNumberInfoSync';

    public function __construct(
        /**
         * A two-letter ISO 639-1 language code for country information localization.
         */
        protected string $languageCode,
        /**
         * The phone number prefix.
         */
        protected string $phoneNumberPrefix,
    ) {}

    public static function fromArray(array $array): GetPhoneNumberInfoSync
    {
        return new static(
            languageCode     : $array['language_code'],
            phoneNumberPrefix: $array['phone_number_prefix'],
        );
    }

    public function getLanguageCode(): string
    {
        return $this->languageCode;
    }

    public function getPhoneNumberPrefix(): string
    {
        return $this->phoneNumberPrefix;
    }

    public function setLanguageCode(string $value): static
    {
        $this->languageCode = $value;

        return $this;
    }

    public function setPhoneNumberPrefix(string $value): static
    {
        $this->phoneNumberPrefix = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'language_code'       => $this->languageCode,
            'phone_number_prefix' => $this->phoneNumberPrefix,
        ];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Age;

use Totaldev\TgSchema\TdObject;

/**
 * Describes parameters for age verification of the current user.
 */
class AgeVerificationParameters extends TdObject
{
    public const string TYPE_NAME = 'ageVerificationParameters';

    public function __construct(
        /**
         * The minimum age required to view restricted content.
         */
        protected int    $minAge,
        /**
         * Username of the bot which main Web App may be used to verify age of the user.
         */
        protected string $verificationBotUsername,
        /**
         * Unique name for the country or region, which legislation required age verification. May be used to get the corresponding localization key.
         */
        protected string $country,
    ) {}

    public static function fromArray(array $array): AgeVerificationParameters
    {
        return new static(
            $array['min_age'],
            $array['verification_bot_username'],
            $array['country'],
        );
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function getMinAge(): int
    {
        return $this->minAge;
    }

    public function getVerificationBotUsername(): string
    {
        return $this->verificationBotUsername;
    }

    public function setCountry(string $value): static
    {
        $this->country = $value;

        return $this;
    }

    public function setMinAge(int $value): static
    {
        $this->minAge = $value;

        return $this;
    }

    public function setVerificationBotUsername(string $value): static
    {
        $this->verificationBotUsername = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                     => static::TYPE_NAME,
            'min_age'                   => $this->minAge,
            'verification_bot_username' => $this->verificationBotUsername,
            'country'                   => $this->country,
        ];
    }
}

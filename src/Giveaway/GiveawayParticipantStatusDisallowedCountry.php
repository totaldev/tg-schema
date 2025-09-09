<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Giveaway;

/**
 * The user can't participate in the giveaway, because they phone number is from a disallowed country.
 */
class GiveawayParticipantStatusDisallowedCountry extends GiveawayParticipantStatus
{
    public const TYPE_NAME = 'giveawayParticipantStatusDisallowedCountry';

    public function __construct(
        /**
         * A two-letter ISO 3166-1 alpha-2 country code of the user's country.
         */
        protected string $userCountryCode
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): GiveawayParticipantStatusDisallowedCountry
    {
        return new static(
            $array['user_country_code'],
        );
    }

    public function getUserCountryCode(): string
    {
        return $this->userCountryCode;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'user_country_code' => $this->userCountryCode,
        ];
    }
}

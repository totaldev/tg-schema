<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Account;

use Totaldev\TgSchema\TdObject;

/**
 * Contains basic information about another user that started a chat with the current user.
 */
class AccountInfo extends TdObject
{
    public const TYPE_NAME = 'accountInfo';

    public function __construct(
        /**
         * Month when the user was registered in Telegram; 0-12; may be 0 if unknown.
         */
        protected int    $registrationMonth,
        /**
         * Year when the user was registered in Telegram; 0-9999; may be 0 if unknown.
         */
        protected int    $registrationYear,
        /**
         * A two-letter ISO 3166-1 alpha-2 country code based on the phone number of the user; may be empty if unknown.
         */
        protected string $phoneNumberCountryCode,
        /**
         * Point in time (Unix timestamp) when the user changed name last time; 0 if unknown.
         */
        protected int    $lastNameChangeDate,
        /**
         * Point in time (Unix timestamp) when the user changed photo last time; 0 if unknown.
         */
        protected int    $lastPhotoChangeDate,
    ) {}

    public static function fromArray(array $array): AccountInfo
    {
        return new static(
            $array['registration_month'],
            $array['registration_year'],
            $array['phone_number_country_code'],
            $array['last_name_change_date'],
            $array['last_photo_change_date'],
        );
    }

    public function getLastNameChangeDate(): int
    {
        return $this->lastNameChangeDate;
    }

    public function getLastPhotoChangeDate(): int
    {
        return $this->lastPhotoChangeDate;
    }

    public function getPhoneNumberCountryCode(): string
    {
        return $this->phoneNumberCountryCode;
    }

    public function getRegistrationMonth(): int
    {
        return $this->registrationMonth;
    }

    public function getRegistrationYear(): int
    {
        return $this->registrationYear;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                     => static::TYPE_NAME,
            'registration_month'        => $this->registrationMonth,
            'registration_year'         => $this->registrationYear,
            'phone_number_country_code' => $this->phoneNumberCountryCode,
            'last_name_change_date'     => $this->lastNameChangeDate,
            'last_photo_change_date'    => $this->lastPhotoChangeDate,
        ];
    }
}

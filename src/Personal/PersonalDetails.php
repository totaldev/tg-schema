<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Personal;

use Totaldev\TgSchema\Date\Date;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains the user's personal details.
 */
class PersonalDetails extends TdObject
{
    public const TYPE_NAME = 'personalDetails';

    public function __construct(
        /**
         * First name of the user written in English; 1-255 characters.
         */
        protected string $firstName,
        /**
         * Middle name of the user written in English; 0-255 characters.
         */
        protected string $middleName,
        /**
         * Last name of the user written in English; 1-255 characters.
         */
        protected string $lastName,
        /**
         * Native first name of the user; 1-255 characters.
         */
        protected string $nativeFirstName,
        /**
         * Native middle name of the user; 0-255 characters.
         */
        protected string $nativeMiddleName,
        /**
         * Native last name of the user; 1-255 characters.
         */
        protected string $nativeLastName,
        /**
         * Birthdate of the user.
         */
        protected Date   $birthdate,
        /**
         * Gender of the user, "male" or "female".
         */
        protected string $gender,
        /**
         * A two-letter ISO 3166-1 alpha-2 country code of the user's country.
         */
        protected string $countryCode,
        /**
         * A two-letter ISO 3166-1 alpha-2 country code of the user's residence country.
         */
        protected string $residenceCountryCode,
    ) {}

    public static function fromArray(array $array): PersonalDetails
    {
        return new static(
            $array['first_name'],
            $array['middle_name'],
            $array['last_name'],
            $array['native_first_name'],
            $array['native_middle_name'],
            $array['native_last_name'],
            TdSchemaRegistry::fromArray($array['birthdate']),
            $array['gender'],
            $array['country_code'],
            $array['residence_country_code'],
        );
    }

    public function getBirthdate(): Date
    {
        return $this->birthdate;
    }

    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getGender(): string
    {
        return $this->gender;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getMiddleName(): string
    {
        return $this->middleName;
    }

    public function getNativeFirstName(): string
    {
        return $this->nativeFirstName;
    }

    public function getNativeLastName(): string
    {
        return $this->nativeLastName;
    }

    public function getNativeMiddleName(): string
    {
        return $this->nativeMiddleName;
    }

    public function getResidenceCountryCode(): string
    {
        return $this->residenceCountryCode;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'first_name'             => $this->firstName,
            'middle_name'            => $this->middleName,
            'last_name'              => $this->lastName,
            'native_first_name'      => $this->nativeFirstName,
            'native_middle_name'     => $this->nativeMiddleName,
            'native_last_name'       => $this->nativeLastName,
            'birthdate'              => $this->birthdate->typeSerialize(),
            'gender'                 => $this->gender,
            'country_code'           => $this->countryCode,
            'residence_country_code' => $this->residenceCountryCode,
        ];
    }
}

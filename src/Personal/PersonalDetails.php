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
    public const string TYPE_NAME = 'personalDetails';

    public function __construct(
        /**
         * Birthdate of the user.
         */
        protected Date   $birthdate,
        /**
         * A two-letter ISO 3166-1 alpha-2 country code of the user's country.
         */
        protected string $countryCode,
        /**
         * First name of the user written in English; 1-255 characters.
         */
        protected string $firstName,
        /**
         * Gender of the user, "male" or "female".
         */
        protected string $gender,
        /**
         * Last name of the user written in English; 1-255 characters.
         */
        protected string $lastName,
        /**
         * Middle name of the user written in English; 0-255 characters.
         */
        protected string $middleName,
        /**
         * Native first name of the user; 1-255 characters.
         */
        protected string $nativeFirstName,
        /**
         * Native last name of the user; 1-255 characters.
         */
        protected string $nativeLastName,
        /**
         * Native middle name of the user; 0-255 characters.
         */
        protected string $nativeMiddleName,
        /**
         * A two-letter ISO 3166-1 alpha-2 country code of the user's residence country.
         */
        protected string $residenceCountryCode,
    ) {}

    public static function fromArray(array $array): PersonalDetails
    {
        return new static(
            birthdate           : TdSchemaRegistry::fromArray($array['birthdate']),
            countryCode         : $array['country_code'],
            firstName           : $array['first_name'],
            gender              : $array['gender'],
            lastName            : $array['last_name'],
            middleName          : $array['middle_name'],
            nativeFirstName     : $array['native_first_name'],
            nativeLastName      : $array['native_last_name'],
            nativeMiddleName    : $array['native_middle_name'],
            residenceCountryCode: $array['residence_country_code'],
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

    public function setBirthdate(Date $value): static
    {
        $this->birthdate = $value;

        return $this;
    }

    public function setCountryCode(string $value): static
    {
        $this->countryCode = $value;

        return $this;
    }

    public function setFirstName(string $value): static
    {
        $this->firstName = $value;

        return $this;
    }

    public function setGender(string $value): static
    {
        $this->gender = $value;

        return $this;
    }

    public function setLastName(string $value): static
    {
        $this->lastName = $value;

        return $this;
    }

    public function setMiddleName(string $value): static
    {
        $this->middleName = $value;

        return $this;
    }

    public function setNativeFirstName(string $value): static
    {
        $this->nativeFirstName = $value;

        return $this;
    }

    public function setNativeLastName(string $value): static
    {
        $this->nativeLastName = $value;

        return $this;
    }

    public function setNativeMiddleName(string $value): static
    {
        $this->nativeMiddleName = $value;

        return $this;
    }

    public function setResidenceCountryCode(string $value): static
    {
        $this->residenceCountryCode = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'birthdate'              => $this->birthdate->jsonSerialize(),
            'country_code'           => $this->countryCode,
            'first_name'             => $this->firstName,
            'gender'                 => $this->gender,
            'last_name'              => $this->lastName,
            'middle_name'            => $this->middleName,
            'native_first_name'      => $this->nativeFirstName,
            'native_last_name'       => $this->nativeLastName,
            'native_middle_name'     => $this->nativeMiddleName,
            'residence_country_code' => $this->residenceCountryCode,
        ];
    }
}

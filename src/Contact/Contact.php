<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Contact;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a user contact.
 */
class Contact extends TdObject
{
    public const TYPE_NAME = 'contact';

    public function __construct(
        /**
         * Phone number of the user.
         */
        protected string $phoneNumber,
        /**
         * First name of the user; 1-255 characters in length.
         */
        protected string $firstName,
        /**
         * Last name of the user.
         */
        protected string $lastName,
        /**
         * Additional data about the user in a form of vCard; 0-2048 bytes in length.
         */
        protected string $vcard,
        /**
         * Identifier of the user, if known; 0 otherwise.
         */
        protected int    $userId,
    ) {}

    public static function fromArray(array $array): Contact
    {
        return new static(
            $array['phone_number'],
            $array['first_name'],
            $array['last_name'],
            $array['vcard'],
            $array['user_id'],
        );
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getVcard(): string
    {
        return $this->vcard;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'phone_number' => $this->phoneNumber,
            'first_name'   => $this->firstName,
            'last_name'    => $this->lastName,
            'vcard'        => $this->vcard,
            'user_id'      => $this->userId,
        ];
    }
}

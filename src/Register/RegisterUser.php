<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Register;

use Totaldev\TgSchema\TdFunction;

/**
 * Finishes user registration. Works only when the current authorization state is authorizationStateWaitRegistration.
 */
class RegisterUser extends TdFunction
{
    public const TYPE_NAME = 'registerUser';

    public function __construct(
        /**
         * The first name of the user; 1-64 characters.
         */
        protected string $firstName,
        /**
         * The last name of the user; 0-64 characters.
         */
        protected string $lastName,
        /**
         * Pass true to disable notification about the current user joining Telegram for other users that added them to contact list.
         */
        protected bool   $disableNotification
    ) {}

    public static function fromArray(array $array): RegisterUser
    {
        return new static(
            $array['first_name'],
            $array['last_name'],
            $array['disable_notification'],
        );
    }

    public function getDisableNotification(): bool
    {
        return $this->disableNotification;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'first_name'           => $this->firstName,
            'last_name'            => $this->lastName,
            'disable_notification' => $this->disableNotification,
        ];
    }
}

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
    public const string TYPE_NAME = 'registerUser';

    public function __construct(
        /**
         * Pass true to disable notification about the current user joining Telegram for other users that added them to contact list.
         */
        protected bool   $disableNotification,
        /**
         * The first name of the user; 1-64 characters.
         */
        protected string $firstName,
        /**
         * The last name of the user; 0-64 characters.
         */
        protected string $lastName,
    ) {}

    public static function fromArray(array $array): RegisterUser
    {
        return new static(
            disableNotification: $array['disable_notification'],
            firstName          : $array['first_name'],
            lastName           : $array['last_name'],
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

    public function setDisableNotification(bool $value): static
    {
        $this->disableNotification = $value;

        return $this;
    }

    public function setFirstName(string $value): static
    {
        $this->firstName = $value;

        return $this;
    }

    public function setLastName(string $value): static
    {
        $this->lastName = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'disable_notification' => $this->disableNotification,
            'first_name'           => $this->firstName,
            'last_name'            => $this->lastName,
        ];
    }
}

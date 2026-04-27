<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes the 2-step verification recovery email address of the user. If a new recovery email address is specified, then the change will not be applied until
 * the new recovery email address is confirmed. If new_recovery_email_address is the same as the email address that is currently set up, this call succeeds
 * immediately and aborts all other requests waiting for an email confirmation.
 */
class SetRecoveryEmailAddress extends TdFunction
{
    public const string TYPE_NAME = 'setRecoveryEmailAddress';

    public function __construct(
        /**
         * New recovery email address.
         */
        protected string $newRecoveryEmailAddress,
        /**
         * The 2-step verification password of the current user.
         */
        protected string $password,
    ) {}

    public static function fromArray(array $array): SetRecoveryEmailAddress
    {
        return new static(
            newRecoveryEmailAddress: $array['new_recovery_email_address'],
            password               : $array['password'],
        );
    }

    public function getNewRecoveryEmailAddress(): string
    {
        return $this->newRecoveryEmailAddress;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setNewRecoveryEmailAddress(string $value): static
    {
        $this->newRecoveryEmailAddress = $value;

        return $this;
    }

    public function setPassword(string $value): static
    {
        $this->password = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                      => static::TYPE_NAME,
            'new_recovery_email_address' => $this->newRecoveryEmailAddress,
            'password'                   => $this->password,
        ];
    }
}

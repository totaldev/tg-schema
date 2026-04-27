<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes the 2-step verification password for the current user. If a new recovery email address is specified, then the change will not be applied until the
 * new recovery email address is confirmed.
 */
class SetPassword extends TdFunction
{
    public const string TYPE_NAME = 'setPassword';

    public function __construct(
        /**
         * New password hint; may be empty.
         */
        protected string $newHint,
        /**
         * New 2-step verification password of the user; may be empty to remove the password.
         */
        protected string $newPassword,
        /**
         * New recovery email address; may be empty.
         */
        protected string $newRecoveryEmailAddress,
        /**
         * Previous 2-step verification password of the user.
         */
        protected string $oldPassword,
        /**
         * Pass true to change also the recovery email address.
         */
        protected bool   $setRecoveryEmailAddress,
    ) {}

    public static function fromArray(array $array): SetPassword
    {
        return new static(
            newHint                : $array['new_hint'],
            newPassword            : $array['new_password'],
            newRecoveryEmailAddress: $array['new_recovery_email_address'],
            oldPassword            : $array['old_password'],
            setRecoveryEmailAddress: $array['set_recovery_email_address'],
        );
    }

    public function getNewHint(): string
    {
        return $this->newHint;
    }

    public function getNewPassword(): string
    {
        return $this->newPassword;
    }

    public function getNewRecoveryEmailAddress(): string
    {
        return $this->newRecoveryEmailAddress;
    }

    public function getOldPassword(): string
    {
        return $this->oldPassword;
    }

    public function getSetRecoveryEmailAddress(): bool
    {
        return $this->setRecoveryEmailAddress;
    }

    public function setNewHint(string $value): static
    {
        $this->newHint = $value;

        return $this;
    }

    public function setNewPassword(string $value): static
    {
        $this->newPassword = $value;

        return $this;
    }

    public function setNewRecoveryEmailAddress(string $value): static
    {
        $this->newRecoveryEmailAddress = $value;

        return $this;
    }

    public function setOldPassword(string $value): static
    {
        $this->oldPassword = $value;

        return $this;
    }

    public function setSetRecoveryEmailAddress(bool $value): static
    {
        $this->setRecoveryEmailAddress = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                      => static::TYPE_NAME,
            'new_hint'                   => $this->newHint,
            'new_password'               => $this->newPassword,
            'new_recovery_email_address' => $this->newRecoveryEmailAddress,
            'old_password'               => $this->oldPassword,
            'set_recovery_email_address' => $this->setRecoveryEmailAddress,
        ];
    }
}

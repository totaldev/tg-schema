<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Recover;

use Totaldev\TgSchema\TdFunction;

/**
 * Recovers the 2-step verification password with a password recovery code sent to an email address that was previously set up. Works only when the current
 * authorization state is authorizationStateWaitPassword.
 */
class RecoverAuthenticationPassword extends TdFunction
{
    public const string TYPE_NAME = 'recoverAuthenticationPassword';

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
         * Recovery code to check.
         */
        protected string $recoveryCode,
    ) {}

    public static function fromArray(array $array): RecoverAuthenticationPassword
    {
        return new static(
            newHint     : $array['new_hint'],
            newPassword : $array['new_password'],
            recoveryCode: $array['recovery_code'],
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

    public function getRecoveryCode(): string
    {
        return $this->recoveryCode;
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

    public function setRecoveryCode(string $value): static
    {
        $this->recoveryCode = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'new_hint'      => $this->newHint,
            'new_password'  => $this->newPassword,
            'recovery_code' => $this->recoveryCode,
        ];
    }
}

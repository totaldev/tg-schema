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
    public const TYPE_NAME = 'recoverAuthenticationPassword';

    public function __construct(
        /**
         * Recovery code to check.
         */
        protected string $recoveryCode,
        /**
         * New 2-step verification password of the user; may be empty to remove the password.
         */
        protected string $newPassword,
        /**
         * New password hint; may be empty.
         */
        protected string $newHint
    ) {}

    public static function fromArray(array $array): RecoverAuthenticationPassword
    {
        return new static(
            $array['recovery_code'],
            $array['new_password'],
            $array['new_hint'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'recovery_code' => $this->recoveryCode,
            'new_password'  => $this->newPassword,
            'new_hint'      => $this->newHint,
        ];
    }
}

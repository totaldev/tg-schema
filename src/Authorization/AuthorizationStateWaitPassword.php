<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Authorization;

/**
 * The user has been authorized, but needs to enter a 2-step verification password to start using the application. Call checkAuthenticationPassword to provide
 * the password, or requestAuthenticationPasswordRecovery to recover the password, or deleteAccount to delete the account after a week.
 */
class AuthorizationStateWaitPassword extends AuthorizationState
{
    public const TYPE_NAME = 'authorizationStateWaitPassword';

    public function __construct(
        /**
         * Hint for the password; may be empty.
         */
        protected string $passwordHint,
        /**
         * True, if a recovery email address has been set up.
         */
        protected bool   $hasRecoveryEmailAddress,
        /**
         * True, if some Telegram Passport elements were saved.
         */
        protected bool   $hasPassportData,
        /**
         * Pattern of the email address to which the recovery email was sent; empty until a recovery email has been sent.
         */
        protected string $recoveryEmailAddressPattern,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): AuthorizationStateWaitPassword
    {
        return new static(
            $array['password_hint'],
            $array['has_recovery_email_address'],
            $array['has_passport_data'],
            $array['recovery_email_address_pattern'],
        );
    }

    public function getHasPassportData(): bool
    {
        return $this->hasPassportData;
    }

    public function getHasRecoveryEmailAddress(): bool
    {
        return $this->hasRecoveryEmailAddress;
    }

    public function getPasswordHint(): string
    {
        return $this->passwordHint;
    }

    public function getRecoveryEmailAddressPattern(): string
    {
        return $this->recoveryEmailAddressPattern;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                          => static::TYPE_NAME,
            'password_hint'                  => $this->passwordHint,
            'has_recovery_email_address'     => $this->hasRecoveryEmailAddress,
            'has_passport_data'              => $this->hasPassportData,
            'recovery_email_address_pattern' => $this->recoveryEmailAddressPattern,
        ];
    }
}

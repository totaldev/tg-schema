<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Password;

use Totaldev\TgSchema\Email\EmailAddressAuthenticationCodeInfo;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents the current state of 2-step verification.
 */
class PasswordState extends TdObject
{
    public const string TYPE_NAME = 'passwordState';

    public function __construct(
        /**
         * True, if some Telegram Passport elements were saved.
         */
        protected bool                                $hasPassportData,
        /**
         * True, if a 2-step verification password is set.
         */
        protected bool                                $hasPassword,
        /**
         * True, if a recovery email is set.
         */
        protected bool                                $hasRecoveryEmailAddress,
        /**
         * Pattern of the email address set up for logging in.
         */
        protected string                              $loginEmailAddressPattern,
        /**
         * Hint for the password; may be empty.
         */
        protected string                              $passwordHint,
        /**
         * If not 0, point in time (Unix timestamp) after which the 2-step verification password can be reset immediately using resetPassword.
         */
        protected int                                 $pendingResetDate,
        /**
         * Information about the recovery email address to which the confirmation email was sent; may be null.
         */
        protected ?EmailAddressAuthenticationCodeInfo $recoveryEmailAddressCodeInfo,
    ) {}

    public static function fromArray(array $array): PasswordState
    {
        return new static(
            hasPassportData             : $array['has_passport_data'],
            hasPassword                 : $array['has_password'],
            hasRecoveryEmailAddress     : $array['has_recovery_email_address'],
            loginEmailAddressPattern    : $array['login_email_address_pattern'],
            passwordHint                : $array['password_hint'],
            pendingResetDate            : $array['pending_reset_date'],
            recoveryEmailAddressCodeInfo: (isset($array['recovery_email_address_code_info']) ? TdSchemaRegistry::fromArray(
                $array['recovery_email_address_code_info']
            ) : null),
        );
    }

    public function getHasPassportData(): bool
    {
        return $this->hasPassportData;
    }

    public function getHasPassword(): bool
    {
        return $this->hasPassword;
    }

    public function getHasRecoveryEmailAddress(): bool
    {
        return $this->hasRecoveryEmailAddress;
    }

    public function getLoginEmailAddressPattern(): string
    {
        return $this->loginEmailAddressPattern;
    }

    public function getPasswordHint(): string
    {
        return $this->passwordHint;
    }

    public function getPendingResetDate(): int
    {
        return $this->pendingResetDate;
    }

    public function getRecoveryEmailAddressCodeInfo(): ?EmailAddressAuthenticationCodeInfo
    {
        return $this->recoveryEmailAddressCodeInfo;
    }

    public function setHasPassportData(bool $value): static
    {
        $this->hasPassportData = $value;

        return $this;
    }

    public function setHasPassword(bool $value): static
    {
        $this->hasPassword = $value;

        return $this;
    }

    public function setHasRecoveryEmailAddress(bool $value): static
    {
        $this->hasRecoveryEmailAddress = $value;

        return $this;
    }

    public function setLoginEmailAddressPattern(string $value): static
    {
        $this->loginEmailAddressPattern = $value;

        return $this;
    }

    public function setPasswordHint(string $value): static
    {
        $this->passwordHint = $value;

        return $this;
    }

    public function setPendingResetDate(int $value): static
    {
        $this->pendingResetDate = $value;

        return $this;
    }

    public function setRecoveryEmailAddressCodeInfo(?EmailAddressAuthenticationCodeInfo $value): static
    {
        $this->recoveryEmailAddressCodeInfo = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                            => static::TYPE_NAME,
            'has_passport_data'                => $this->hasPassportData,
            'has_password'                     => $this->hasPassword,
            'has_recovery_email_address'       => $this->hasRecoveryEmailAddress,
            'login_email_address_pattern'      => $this->loginEmailAddressPattern,
            'password_hint'                    => $this->passwordHint,
            'pending_reset_date'               => $this->pendingResetDate,
            'recovery_email_address_code_info' => (null !== $this->recoveryEmailAddressCodeInfo ? $this->recoveryEmailAddressCodeInfo->jsonSerialize() : null),
        ];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Password;

use Totaldev\TgSchema\Email\EmailAddressAuthenticationCodeInfo;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents the current state of 2-step verification
 */
class PasswordState extends TdObject
{
    public const TYPE_NAME = 'passwordState';

    /**
     * True, if a 2-step verification password is set
     *
     * @var bool
     */
    protected bool $hasPassword;

    /**
     * Hint for the password; may be empty
     *
     * @var string
     */
    protected string $passwordHint;

    /**
     * True, if a recovery email is set
     *
     * @var bool
     */
    protected bool $hasRecoveryEmailAddress;

    /**
     * True, if some Telegram Passport elements were saved
     *
     * @var bool
     */
    protected bool $hasPassportData;

    /**
     * Information about the recovery email address to which the confirmation email was sent; may be null
     *
     * @var EmailAddressAuthenticationCodeInfo|null
     */
    protected ?EmailAddressAuthenticationCodeInfo $recoveryEmailAddressCodeInfo;

    /**
     * Pattern of the email address set up for logging in
     *
     * @var string
     */
    protected string $loginEmailAddressPattern;

    /**
     * If not 0, point in time (Unix timestamp) after which the 2-step verification password can be reset immediately using resetPassword
     *
     * @var int
     */
    protected int $pendingResetDate;

    public function __construct(
        bool $hasPassword,
        string $passwordHint,
        bool $hasRecoveryEmailAddress,
        bool $hasPassportData,
        ?EmailAddressAuthenticationCodeInfo $recoveryEmailAddressCodeInfo,
        string $loginEmailAddressPattern,
        int $pendingResetDate,
    ) {
        $this->hasPassword = $hasPassword;
        $this->passwordHint = $passwordHint;
        $this->hasRecoveryEmailAddress = $hasRecoveryEmailAddress;
        $this->hasPassportData = $hasPassportData;
        $this->recoveryEmailAddressCodeInfo = $recoveryEmailAddressCodeInfo;
        $this->loginEmailAddressPattern = $loginEmailAddressPattern;
        $this->pendingResetDate = $pendingResetDate;
    }

    public static function fromArray(array $array): PasswordState
    {
        return new static(
            $array['has_password'],
            $array['password_hint'],
            $array['has_recovery_email_address'],
            $array['has_passport_data'],
            (isset($array['recovery_email_address_code_info']) ? TdSchemaRegistry::fromArray($array['recovery_email_address_code_info']) : null),
            $array['login_email_address_pattern'],
            $array['pending_reset_date'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'has_password' => $this->hasPassword,
            'password_hint' => $this->passwordHint,
            'has_recovery_email_address' => $this->hasRecoveryEmailAddress,
            'has_passport_data' => $this->hasPassportData,
            'recovery_email_address_code_info' => (isset($this->recoveryEmailAddressCodeInfo) ? $this->recoveryEmailAddressCodeInfo : null),
            'login_email_address_pattern' => $this->loginEmailAddressPattern,
            'pending_reset_date' => $this->pendingResetDate,
        ];
    }

    public function getHasPassword(): bool
    {
        return $this->hasPassword;
    }

    public function getPasswordHint(): string
    {
        return $this->passwordHint;
    }

    public function getHasRecoveryEmailAddress(): bool
    {
        return $this->hasRecoveryEmailAddress;
    }

    public function getHasPassportData(): bool
    {
        return $this->hasPassportData;
    }

    public function getRecoveryEmailAddressCodeInfo(): ?EmailAddressAuthenticationCodeInfo
    {
        return $this->recoveryEmailAddressCodeInfo;
    }

    public function getLoginEmailAddressPattern(): string
    {
        return $this->loginEmailAddressPattern;
    }

    public function getPendingResetDate(): int
    {
        return $this->pendingResetDate;
    }
}

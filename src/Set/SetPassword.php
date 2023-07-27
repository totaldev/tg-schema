<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes the 2-step verification password for the current user. If a new recovery email address is specified, then the change will not be applied until the new recovery email address is confirmed
 */
class SetPassword extends TdFunction
{
    public const TYPE_NAME = 'setPassword';

    /**
     * Previous 2-step verification password of the user
     *
     * @var string
     */
    protected string $oldPassword;

    /**
     * New 2-step verification password of the user; may be empty to remove the password
     *
     * @var string
     */
    protected string $newPassword;

    /**
     * New password hint; may be empty
     *
     * @var string
     */
    protected string $newHint;

    /**
     * Pass true to change also the recovery email address
     *
     * @var bool
     */
    protected bool $setRecoveryEmailAddress;

    /**
     * New recovery email address; may be empty
     *
     * @var string
     */
    protected string $newRecoveryEmailAddress;

    public function __construct(
        string $oldPassword,
        string $newPassword,
        string $newHint,
        bool $setRecoveryEmailAddress,
        string $newRecoveryEmailAddress,
    ) {
        $this->oldPassword = $oldPassword;
        $this->newPassword = $newPassword;
        $this->newHint = $newHint;
        $this->setRecoveryEmailAddress = $setRecoveryEmailAddress;
        $this->newRecoveryEmailAddress = $newRecoveryEmailAddress;
    }

    public static function fromArray(array $array): SetPassword
    {
        return new static(
            $array['old_password'],
            $array['new_password'],
            $array['new_hint'],
            $array['set_recovery_email_address'],
            $array['new_recovery_email_address'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'old_password' => $this->oldPassword,
            'new_password' => $this->newPassword,
            'new_hint' => $this->newHint,
            'set_recovery_email_address' => $this->setRecoveryEmailAddress,
            'new_recovery_email_address' => $this->newRecoveryEmailAddress,
        ];
    }

    public function getOldPassword(): string
    {
        return $this->oldPassword;
    }

    public function getNewPassword(): string
    {
        return $this->newPassword;
    }

    public function getNewHint(): string
    {
        return $this->newHint;
    }

    public function getSetRecoveryEmailAddress(): bool
    {
        return $this->setRecoveryEmailAddress;
    }

    public function getNewRecoveryEmailAddress(): string
    {
        return $this->newRecoveryEmailAddress;
    }
}

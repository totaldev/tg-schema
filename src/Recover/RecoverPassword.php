<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Recover;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Recovers the 2-step verification password using a recovery code sent to an email address that was previously set up
 */
class RecoverPassword extends TdFunction
{
    public const TYPE_NAME = 'recoverPassword';

    /**
     * New password hint; may be empty
     *
     * @var string
     */
    protected string $newHint;

    /**
     * New 2-step verification password of the user; may be empty to remove the password
     *
     * @var string
     */
    protected string $newPassword;

    /**
     * Recovery code to check
     *
     * @var string
     */
    protected string $recoveryCode;

    public function __construct(string $recoveryCode, string $newPassword, string $newHint)
    {
        $this->recoveryCode = $recoveryCode;
        $this->newPassword = $newPassword;
        $this->newHint = $newHint;
    }

    public static function fromArray(array $array): RecoverPassword
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
            '@type' => static::TYPE_NAME,
            'recovery_code' => $this->recoveryCode,
            'new_password' => $this->newPassword,
            'new_hint' => $this->newHint,
        ];
    }
}

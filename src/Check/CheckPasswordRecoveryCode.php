<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Check;

use Totaldev\TgSchema\TdFunction;

/**
 * Checks whether a 2-step verification password recovery code sent to an email address is valid.
 */
class CheckPasswordRecoveryCode extends TdFunction
{
    public const TYPE_NAME = 'checkPasswordRecoveryCode';

    public function __construct(
        /**
         * Recovery code to check.
         */
        protected string $recoveryCode
    ) {}

    public static function fromArray(array $array): CheckPasswordRecoveryCode
    {
        return new static(
            $array['recovery_code'],
        );
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
        ];
    }
}

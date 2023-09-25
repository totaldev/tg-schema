<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Check;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Checks whether a 2-step verification password recovery code sent to an email address is valid
 */
class CheckPasswordRecoveryCode extends TdFunction
{
    public const TYPE_NAME = 'checkPasswordRecoveryCode';

    /**
     * Recovery code to check
     *
     * @var string
     */
    protected string $recoveryCode;

    public function __construct(string $recoveryCode)
    {
        $this->recoveryCode = $recoveryCode;
    }

    public static function fromArray(array $array): CheckPasswordRecoveryCode
    {
        return new static(
            $array['recovery_code'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'recovery_code' => $this->recoveryCode,
        ];
    }

    public function getRecoveryCode(): string
    {
        return $this->recoveryCode;
    }
}

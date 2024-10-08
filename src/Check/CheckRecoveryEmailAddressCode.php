<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Check;

use Totaldev\TgSchema\TdFunction;

/**
 * Checks the 2-step verification recovery email address verification code.
 */
class CheckRecoveryEmailAddressCode extends TdFunction
{
    public const TYPE_NAME = 'checkRecoveryEmailAddressCode';

    public function __construct(
        /**
         * Verification code to check.
         */
        protected string $code
    ) {}

    public static function fromArray(array $array): CheckRecoveryEmailAddressCode
    {
        return new static(
            $array['code'],
        );
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'code'  => $this->code,
        ];
    }
}

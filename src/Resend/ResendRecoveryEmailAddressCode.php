<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Resend;

use Totaldev\TgSchema\TdFunction;

/**
 * Resends the 2-step verification recovery email address verification code.
 */
class ResendRecoveryEmailAddressCode extends TdFunction
{
    public const TYPE_NAME = 'resendRecoveryEmailAddressCode';

    public function __construct() {}

    public static function fromArray(array $array): ResendRecoveryEmailAddressCode
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

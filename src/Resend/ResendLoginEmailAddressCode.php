<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Resend;

use Totaldev\TgSchema\TdFunction;

/**
 * Resends the login email address verification code.
 */
class ResendLoginEmailAddressCode extends TdFunction
{
    public const TYPE_NAME = 'resendLoginEmailAddressCode';

    public function __construct() {}

    public static function fromArray(array $array): ResendLoginEmailAddressCode
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Resends the login email address verification code
 */
class ResendLoginEmailAddressCode extends TdFunction
{
    public const TYPE_NAME = 'resendLoginEmailAddressCode';

    public function __construct()
    {
    }

    public static function fromArray(array $array): ResendLoginEmailAddressCode
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

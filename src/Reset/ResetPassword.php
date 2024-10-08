<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Reset;

use Totaldev\TgSchema\TdFunction;

/**
 * Removes 2-step verification password without previous password and access to recovery email address. The password can't be reset immediately and the request
 * needs to be repeated after the specified time.
 */
class ResetPassword extends TdFunction
{
    public const TYPE_NAME = 'resetPassword';

    public function __construct() {}

    public static function fromArray(array $array): ResetPassword
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

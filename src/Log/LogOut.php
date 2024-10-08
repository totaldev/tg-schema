<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Log;

use Totaldev\TgSchema\TdFunction;

/**
 * Closes the TDLib instance after a proper logout. Requires an available network connection. All local data will be destroyed. After the logout completes,
 * updateAuthorizationState with authorizationStateClosed will be sent.
 */
class LogOut extends TdFunction
{
    public const TYPE_NAME = 'logOut';

    public function __construct() {}

    public static function fromArray(array $array): LogOut
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

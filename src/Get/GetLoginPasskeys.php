<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the list of passkeys allowed to be used for the login by the current user.
 */
class GetLoginPasskeys extends TdFunction
{
    public const string TYPE_NAME = 'getLoginPasskeys';

    public function __construct() {}

    public static function fromArray(array $array): GetLoginPasskeys
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

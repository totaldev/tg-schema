<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Is;

use Totaldev\TgSchema\TdFunction;

/**
 * Checks whether the current user is required to set login email address.
 */
class IsLoginEmailAddressRequired extends TdFunction
{
    public const string TYPE_NAME = 'isLoginEmailAddressRequired';

    public function __construct() {}

    public static function fromArray(array $array): IsLoginEmailAddressRequired
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

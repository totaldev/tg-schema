<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Authentication;

use Totaldev\TgSchema\TdObject;

/**
 * Provides information about the method by which an authentication code is delivered to the user.
 */
class AuthenticationCodeType extends TdObject
{
    public const TYPE_NAME = 'AuthenticationCodeType';

    public function __construct() {}

    public static function fromArray(array $array): AuthenticationCodeType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

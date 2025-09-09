<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the current user.
 */
class GetMe extends TdFunction
{
    public const TYPE_NAME = 'getMe';

    public function __construct() {}

    public static function fromArray(array $array): GetMe
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns information about the current temporary password.
 */
class GetTemporaryPasswordState extends TdFunction
{
    public const TYPE_NAME = 'getTemporaryPasswordState';

    public function __construct() {}

    public static function fromArray(array $array): GetTemporaryPasswordState
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

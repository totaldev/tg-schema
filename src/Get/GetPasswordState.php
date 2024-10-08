<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the current state of 2-step verification.
 */
class GetPasswordState extends TdFunction
{
    public const TYPE_NAME = 'getPasswordState';

    public function __construct() {}

    public static function fromArray(array $array): GetPasswordState
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

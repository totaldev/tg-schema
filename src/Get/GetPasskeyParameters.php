<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns parameters for creating of a new passkey as JSON-serialized string.
 */
class GetPasskeyParameters extends TdFunction
{
    public const string TYPE_NAME = 'getPasskeyParameters';

    public function __construct() {}

    public static function fromArray(array $array): GetPasskeyParameters
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

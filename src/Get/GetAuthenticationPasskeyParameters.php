<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns parameters for authentication using a passkey as JSON-serialized string.
 */
class GetAuthenticationPasskeyParameters extends TdFunction
{
    public const string TYPE_NAME = 'getAuthenticationPasskeyParameters';

    public function __construct() {}

    public static function fromArray(array $array): GetAuthenticationPasskeyParameters
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

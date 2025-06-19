<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the current authorization state. This is an offline method. For informational purposes only. Use updateAuthorizationState instead to maintain the
 * current authorization state. Can be called before initialization.
 */
class GetAuthorizationState extends TdFunction
{
    public const TYPE_NAME = 'getAuthorizationState';

    public function __construct() {}

    public static function fromArray(array $array): GetAuthorizationState
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

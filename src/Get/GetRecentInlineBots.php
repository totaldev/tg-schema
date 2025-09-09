<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns up to 20 recently used inline bots in the order of their last usage.
 */
class GetRecentInlineBots extends TdFunction
{
    public const TYPE_NAME = 'getRecentInlineBots';

    public function __construct() {}

    public static function fromArray(array $array): GetRecentInlineBots
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

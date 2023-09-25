<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Clear;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Clears the list of recently used reactions
 */
class ClearRecentReactions extends TdFunction
{
    public const TYPE_NAME = 'clearRecentReactions';

    public function __construct()
    {
    }

    public static function fromArray(array $array): ClearRecentReactions
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

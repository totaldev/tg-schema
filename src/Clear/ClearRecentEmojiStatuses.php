<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Clear;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Clears the list of recently used emoji statuses
 */
class ClearRecentEmojiStatuses extends TdFunction
{
    public const TYPE_NAME = 'clearRecentEmojiStatuses';

    public function __construct()
    {
    }

    public static function fromArray(array $array): ClearRecentEmojiStatuses
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

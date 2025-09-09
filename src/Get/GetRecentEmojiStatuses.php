<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns recent emoji statuses for self status.
 */
class GetRecentEmojiStatuses extends TdFunction
{
    public const TYPE_NAME = 'getRecentEmojiStatuses';

    public function __construct() {}

    public static function fromArray(array $array): GetRecentEmojiStatuses
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

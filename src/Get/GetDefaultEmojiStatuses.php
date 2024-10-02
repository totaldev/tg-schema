<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns default emoji statuses for self status.
 */
class GetDefaultEmojiStatuses extends TdFunction
{
    public const TYPE_NAME = 'getDefaultEmojiStatuses';

    public function __construct() {}

    public static function fromArray(array $array): GetDefaultEmojiStatuses
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

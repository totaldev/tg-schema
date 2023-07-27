<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns default emoji statuses
 */
class GetDefaultEmojiStatuses extends TdFunction
{
    public const TYPE_NAME = 'getDefaultEmojiStatuses';

    public function __construct()
    {
    }

    public static function fromArray(array $array): GetDefaultEmojiStatuses
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns up to 8 emoji statuses, which must be shown right after the default Premium Badge in the emoji status list for self status.
 */
class GetThemedEmojiStatuses extends TdFunction
{
    public const TYPE_NAME = 'getThemedEmojiStatuses';

    public function __construct() {}

    public static function fromArray(array $array): GetThemedEmojiStatuses
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns up to 8 emoji statuses, which must be shown in the emoji status list for chats.
 */
class GetThemedChatEmojiStatuses extends TdFunction
{
    public const TYPE_NAME = 'getThemedChatEmojiStatuses';

    public function __construct() {}

    public static function fromArray(array $array): GetThemedChatEmojiStatuses
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the list of emoji statuses, which can't be used as chat emoji status, even they are from a sticker set with is_allowed_as_chat_emoji_status == true.
 */
class GetDisallowedChatEmojiStatuses extends TdFunction
{
    public const TYPE_NAME = 'getDisallowedChatEmojiStatuses';

    public function __construct() {}

    public static function fromArray(array $array): GetDisallowedChatEmojiStatuses
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

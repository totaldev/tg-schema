<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns default emoji statuses for chats.
 */
class GetDefaultChatEmojiStatuses extends TdFunction
{
    public const TYPE_NAME = 'getDefaultChatEmojiStatuses';

    public function __construct() {}

    public static function fromArray(array $array): GetDefaultChatEmojiStatuses
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

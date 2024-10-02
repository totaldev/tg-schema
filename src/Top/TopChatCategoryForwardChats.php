<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Top;

/**
 * A category containing frequently used chats used to forward messages.
 */
class TopChatCategoryForwardChats extends TopChatCategory
{
    public const TYPE_NAME = 'topChatCategoryForwardChats';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): TopChatCategoryForwardChats
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

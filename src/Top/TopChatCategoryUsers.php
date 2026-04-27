<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Top;

/**
 * A category containing frequently used private chats with non-bot users.
 */
class TopChatCategoryUsers extends TopChatCategory
{
    public const string TYPE_NAME = 'topChatCategoryUsers';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): TopChatCategoryUsers
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

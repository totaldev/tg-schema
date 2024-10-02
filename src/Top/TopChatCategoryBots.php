<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Top;

/**
 * A category containing frequently used private chats with bot users.
 */
class TopChatCategoryBots extends TopChatCategory
{
    public const TYPE_NAME = 'topChatCategoryBots';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): TopChatCategoryBots
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

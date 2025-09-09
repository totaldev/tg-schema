<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Top;

/**
 * A category containing frequently used chats with bots, which Web Apps were opened.
 */
class TopChatCategoryWebAppBots extends TopChatCategory
{
    public const TYPE_NAME = 'topChatCategoryWebAppBots';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): TopChatCategoryWebAppBots
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

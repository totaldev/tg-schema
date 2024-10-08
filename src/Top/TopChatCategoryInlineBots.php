<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Top;

/**
 * A category containing frequently used chats with inline bots sorted by their usage in inline mode.
 */
class TopChatCategoryInlineBots extends TopChatCategory
{
    public const TYPE_NAME = 'topChatCategoryInlineBots';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): TopChatCategoryInlineBots
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

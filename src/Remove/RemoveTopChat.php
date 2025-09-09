<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Remove;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Top\TopChatCategory;

/**
 * Removes a chat from the list of frequently used chats. Supported only if the chat info database is enabled.
 */
class RemoveTopChat extends TdFunction
{
    public const TYPE_NAME = 'removeTopChat';

    public function __construct(
        /**
         * Category of frequently used chats.
         */
        protected TopChatCategory $category,
        /**
         * Chat identifier.
         */
        protected int             $chatId,
    ) {}

    public static function fromArray(array $array): RemoveTopChat
    {
        return new static(
            TdSchemaRegistry::fromArray($array['category']),
            $array['chat_id'],
        );
    }

    public function getCategory(): TopChatCategory
    {
        return $this->category;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'category' => $this->category->typeSerialize(),
            'chat_id'  => $this->chatId,
        ];
    }
}

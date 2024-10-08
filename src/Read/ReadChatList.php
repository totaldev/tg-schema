<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Read;

use Totaldev\TgSchema\Chat\ChatList;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Traverse all chats in a chat list and marks all messages in the chats as read.
 */
class ReadChatList extends TdFunction
{
    public const TYPE_NAME = 'readChatList';

    public function __construct(
        /**
         * Chat list in which to mark all chats as read.
         */
        protected ChatList $chatList
    ) {}

    public static function fromArray(array $array): ReadChatList
    {
        return new static(
            TdSchemaRegistry::fromArray($array['chat_list']),
        );
    }

    public function getChatList(): ChatList
    {
        return $this->chatList;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'chat_list' => $this->chatList->typeSerialize(),
        ];
    }
}

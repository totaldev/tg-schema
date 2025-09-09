<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Chat\ChatList;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A chat was removed from a chat list.
 */
class UpdateChatRemovedFromList extends Update
{
    public const TYPE_NAME = 'updateChatRemovedFromList';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int      $chatId,
        /**
         * The chat list from which the chat was removed.
         */
        protected ChatList $chatList,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatRemovedFromList
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['chat_list']),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getChatList(): ChatList
    {
        return $this->chatList;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'chat_id'   => $this->chatId,
            'chat_list' => $this->chatList->typeSerialize(),
        ];
    }
}

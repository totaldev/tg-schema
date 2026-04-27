<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Load;

use Totaldev\TgSchema\Chat\ChatList;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Loads more chats from a chat list. The loaded chats and their positions in the chat list will be sent through updates. Chats are sorted by the pair
 * (chat.position.order, chat.id) in descending order. Returns a 404 error if all chats have been loaded.
 */
class LoadChats extends TdFunction
{
    public const string TYPE_NAME = 'loadChats';

    public function __construct(
        /**
         * The maximum number of chats to be loaded. For optimal performance, the number of loaded chats is chosen by TDLib and can be smaller than the specified limit, even if the end of the list is not reached.
         */
        protected int       $limit,
        /**
         * The chat list in which to load chats; pass null to load chats from the main chat list.
         */
        protected ?ChatList $chatList = null,
    ) {}

    public static function fromArray(array $array): LoadChats
    {
        return new static(
            chatList: (isset($array['chat_list']) ? TdSchemaRegistry::fromArray($array['chat_list']) : null),
            limit   : $array['limit'],
        );
    }

    public function getChatList(): ?ChatList
    {
        return $this->chatList;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function setChatList(?ChatList $value): static
    {
        $this->chatList = $value;

        return $this;
    }

    public function setLimit(int $value): static
    {
        $this->limit = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'chat_list' => (null !== $this->chatList ? $this->chatList->jsonSerialize() : null),
            'limit'     => $this->limit,
        ];
    }
}

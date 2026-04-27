<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Chat\ChatList;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns an ordered list of chats from the beginning of a chat list. For informational purposes only. Use loadChats and updates processing instead to
 * maintain chat lists in a consistent state.
 */
class GetChats extends TdFunction
{
    public const string TYPE_NAME = 'getChats';

    public function __construct(
        /**
         * The maximum number of chats to be returned.
         */
        protected int       $limit,
        /**
         * The chat list in which to return chats; pass null to get chats from the main chat list.
         */
        protected ?ChatList $chatList = null,
    ) {}

    public static function fromArray(array $array): GetChats
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

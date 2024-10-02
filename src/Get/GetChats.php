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
    public const TYPE_NAME = 'getChats';

    public function __construct(
        /**
         * The chat list in which to return chats; pass null to get chats from the main chat list.
         */
        protected ChatList $chatList,
        /**
         * The maximum number of chats to be returned.
         */
        protected int      $limit,
    ) {}

    public static function fromArray(array $array): GetChats
    {
        return new static(
            TdSchemaRegistry::fromArray($array['chat_list']),
            $array['limit'],
        );
    }

    public function getChatList(): ChatList
    {
        return $this->chatList;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'chat_list' => $this->chatList->typeSerialize(),
            'limit'     => $this->limit,
        ];
    }
}

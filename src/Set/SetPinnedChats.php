<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Chat\ChatList;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes the order of pinned chats.
 */
class SetPinnedChats extends TdFunction
{
    public const TYPE_NAME = 'setPinnedChats';

    public function __construct(
        /**
         * Chat list in which to change the order of pinned chats.
         */
        protected ChatList $chatList,
        /**
         * The new list of pinned chats.
         *
         * @var int[]
         */
        protected array    $chatIds
    ) {}

    public static function fromArray(array $array): SetPinnedChats
    {
        return new static(
            TdSchemaRegistry::fromArray($array['chat_list']),
            $array['chat_ids'],
        );
    }

    public function getChatIds(): array
    {
        return $this->chatIds;
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
            'chat_ids'  => $this->chatIds,
        ];
    }
}

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
    public const string TYPE_NAME = 'setPinnedChats';

    public function __construct(
        /**
         * The new list of pinned chats.
         *
         * @var int[]
         */
        protected array    $chatIds,
        /**
         * Chat list in which to change the order of pinned chats.
         */
        protected ChatList $chatList,
    ) {}

    public static function fromArray(array $array): SetPinnedChats
    {
        return new static(
            chatIds : $array['chat_ids'],
            chatList: TdSchemaRegistry::fromArray($array['chat_list']),
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

    public function setChatIds(array $value): static
    {
        $this->chatIds = $value;

        return $this;
    }

    public function setChatList(ChatList $value): static
    {
        $this->chatList = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'chat_ids'  => $this->chatIds,
            'chat_list' => $this->chatList->jsonSerialize(),
        ];
    }
}

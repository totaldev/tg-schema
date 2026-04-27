<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Chat\ChatList;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Number of unread chats, i.e. with unread messages or marked as unread, has changed. This update is sent only if the message database is used.
 */
class UpdateUnreadChatCount extends Update
{
    public const string TYPE_NAME = 'updateUnreadChatCount';

    public function __construct(
        /**
         * The chat list with changed number of unread messages.
         */
        protected ChatList $chatList,
        /**
         * Total number of chats marked as unread.
         */
        protected int      $markedAsUnreadCount,
        /**
         * Total number of unmuted chats marked as unread.
         */
        protected int      $markedAsUnreadUnmutedCount,
        /**
         * Approximate total number of chats in the chat list.
         */
        protected int      $totalCount,
        /**
         * Total number of unread chats.
         */
        protected int      $unreadCount,
        /**
         * Total number of unread unmuted chats.
         */
        protected int      $unreadUnmutedCount,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateUnreadChatCount
    {
        return new static(
            chatList                  : TdSchemaRegistry::fromArray($array['chat_list']),
            markedAsUnreadCount       : $array['marked_as_unread_count'],
            markedAsUnreadUnmutedCount: $array['marked_as_unread_unmuted_count'],
            totalCount                : $array['total_count'],
            unreadCount               : $array['unread_count'],
            unreadUnmutedCount        : $array['unread_unmuted_count'],
        );
    }

    public function getChatList(): ChatList
    {
        return $this->chatList;
    }

    public function getMarkedAsUnreadCount(): int
    {
        return $this->markedAsUnreadCount;
    }

    public function getMarkedAsUnreadUnmutedCount(): int
    {
        return $this->markedAsUnreadUnmutedCount;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function getUnreadCount(): int
    {
        return $this->unreadCount;
    }

    public function getUnreadUnmutedCount(): int
    {
        return $this->unreadUnmutedCount;
    }

    public function setChatList(ChatList $value): static
    {
        $this->chatList = $value;

        return $this;
    }

    public function setMarkedAsUnreadCount(int $value): static
    {
        $this->markedAsUnreadCount = $value;

        return $this;
    }

    public function setMarkedAsUnreadUnmutedCount(int $value): static
    {
        $this->markedAsUnreadUnmutedCount = $value;

        return $this;
    }

    public function setTotalCount(int $value): static
    {
        $this->totalCount = $value;

        return $this;
    }

    public function setUnreadCount(int $value): static
    {
        $this->unreadCount = $value;

        return $this;
    }

    public function setUnreadUnmutedCount(int $value): static
    {
        $this->unreadUnmutedCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                          => static::TYPE_NAME,
            'chat_list'                      => $this->chatList->jsonSerialize(),
            'marked_as_unread_count'         => $this->markedAsUnreadCount,
            'marked_as_unread_unmuted_count' => $this->markedAsUnreadUnmutedCount,
            'total_count'                    => $this->totalCount,
            'unread_count'                   => $this->unreadCount,
            'unread_unmuted_count'           => $this->unreadUnmutedCount,
        ];
    }
}

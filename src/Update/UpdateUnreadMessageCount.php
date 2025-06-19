<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Chat\ChatList;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Number of unread messages in a chat list has changed. This update is sent only if the message database is used.
 */
class UpdateUnreadMessageCount extends Update
{
    public const TYPE_NAME = 'updateUnreadMessageCount';

    public function __construct(
        /**
         * The chat list with changed number of unread messages.
         */
        protected ChatList $chatList,
        /**
         * Total number of unread messages.
         */
        protected int      $unreadCount,
        /**
         * Total number of unread messages in unmuted chats.
         */
        protected int      $unreadUnmutedCount
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateUnreadMessageCount
    {
        return new static(
            TdSchemaRegistry::fromArray($array['chat_list']),
            $array['unread_count'],
            $array['unread_unmuted_count'],
        );
    }

    public function getChatList(): ChatList
    {
        return $this->chatList;
    }

    public function getUnreadCount(): int
    {
        return $this->unreadCount;
    }

    public function getUnreadUnmutedCount(): int
    {
        return $this->unreadUnmutedCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'chat_list'            => $this->chatList->typeSerialize(),
            'unread_count'         => $this->unreadCount,
            'unread_unmuted_count' => $this->unreadUnmutedCount,
        ];
    }
}

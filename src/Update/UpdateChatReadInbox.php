<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * Incoming messages were read or the number of unread messages has been changed.
 */
class UpdateChatReadInbox extends Update
{
    public const TYPE_NAME = 'updateChatReadInbox';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int $chatId,
        /**
         * Identifier of the last read incoming message.
         */
        protected int $lastReadInboxMessageId,
        /**
         * The number of unread messages left in the chat.
         */
        protected int $unreadCount,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatReadInbox
    {
        return new static(
            $array['chat_id'],
            $array['last_read_inbox_message_id'],
            $array['unread_count'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getLastReadInboxMessageId(): int
    {
        return $this->lastReadInboxMessageId;
    }

    public function getUnreadCount(): int
    {
        return $this->unreadCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                      => static::TYPE_NAME,
            'chat_id'                    => $this->chatId,
            'last_read_inbox_message_id' => $this->lastReadInboxMessageId,
            'unread_count'               => $this->unreadCount,
        ];
    }
}

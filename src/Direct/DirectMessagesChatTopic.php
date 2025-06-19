<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Direct;

use Totaldev\TgSchema\Draft\DraftMessage;
use Totaldev\TgSchema\Message\Message;
use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about a topic in a channel direct messages chat administered by the current user.
 */
class DirectMessagesChatTopic extends TdObject
{
    public const TYPE_NAME = 'directMessagesChatTopic';

    public function __construct(
        /**
         * Identifier of the chat to which the topic belongs.
         */
        protected int           $chatId,
        /**
         * Unique topic identifier.
         */
        protected int           $id,
        /**
         * Identifier of the user or chat that sends the messages to the topic.
         */
        protected MessageSender $senderId,
        /**
         * A parameter used to determine order of the topic in the topic list. Topics must be sorted by the order in descending order.
         */
        protected int           $order,
        /**
         * True, if the forum topic is marked as unread.
         */
        protected bool          $isMarkedAsUnread,
        /**
         * Number of unread messages in the chat.
         */
        protected int           $unreadCount,
        /**
         * Identifier of the last read incoming message.
         */
        protected int           $lastReadInboxMessageId,
        /**
         * Identifier of the last read outgoing message.
         */
        protected int           $lastReadOutboxMessageId,
        /**
         * Number of messages with unread reactions in the chat.
         */
        protected int           $unreadReactionCount,
        /**
         * Last message in the topic; may be null if none or unknown.
         */
        protected ?Message      $lastMessage,
        /**
         * A draft of a message in the topic; may be null if none.
         */
        protected ?DraftMessage $draftMessage,
    ) {}

    public static function fromArray(array $array): DirectMessagesChatTopic
    {
        return new static(
            $array['chat_id'],
            $array['id'],
            TdSchemaRegistry::fromArray($array['sender_id']),
            $array['order'],
            $array['is_marked_as_unread'],
            $array['unread_count'],
            $array['last_read_inbox_message_id'],
            $array['last_read_outbox_message_id'],
            $array['unread_reaction_count'],
            isset($array['last_message']) ? TdSchemaRegistry::fromArray($array['last_message']) : null,
            isset($array['draft_message']) ? TdSchemaRegistry::fromArray($array['draft_message']) : null,
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getDraftMessage(): ?DraftMessage
    {
        return $this->draftMessage;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getIsMarkedAsUnread(): bool
    {
        return $this->isMarkedAsUnread;
    }

    public function getLastMessage(): ?Message
    {
        return $this->lastMessage;
    }

    public function getLastReadInboxMessageId(): int
    {
        return $this->lastReadInboxMessageId;
    }

    public function getLastReadOutboxMessageId(): int
    {
        return $this->lastReadOutboxMessageId;
    }

    public function getOrder(): int
    {
        return $this->order;
    }

    public function getSenderId(): MessageSender
    {
        return $this->senderId;
    }

    public function getUnreadCount(): int
    {
        return $this->unreadCount;
    }

    public function getUnreadReactionCount(): int
    {
        return $this->unreadReactionCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                       => static::TYPE_NAME,
            'chat_id'                     => $this->chatId,
            'id'                          => $this->id,
            'sender_id'                   => $this->senderId->typeSerialize(),
            'order'                       => $this->order,
            'is_marked_as_unread'         => $this->isMarkedAsUnread,
            'unread_count'                => $this->unreadCount,
            'last_read_inbox_message_id'  => $this->lastReadInboxMessageId,
            'last_read_outbox_message_id' => $this->lastReadOutboxMessageId,
            'unread_reaction_count'       => $this->unreadReactionCount,
            'last_message'                => (isset($this->lastMessage) ? $this->lastMessage : null),
            'draft_message'               => (isset($this->draftMessage) ? $this->draftMessage : null),
        ];
    }
}

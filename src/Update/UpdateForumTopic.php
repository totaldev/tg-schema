<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Chat\ChatNotificationSettings;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Information about a topic in a forum chat was changed.
 */
class UpdateForumTopic extends Update
{
    public const TYPE_NAME = 'updateForumTopic';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int                      $chatId,
        /**
         * Message thread identifier of the topic.
         */
        protected int                      $messageThreadId,
        /**
         * True, if the topic is pinned in the topic list.
         */
        protected bool                     $isPinned,
        /**
         * Identifier of the last read incoming message.
         */
        protected int                      $lastReadInboxMessageId,
        /**
         * Identifier of the last read outgoing message.
         */
        protected int                      $lastReadOutboxMessageId,
        /**
         * Number of unread messages with a mention/reply in the topic.
         */
        protected int                      $unreadMentionCount,
        /**
         * Number of messages with unread reactions in the topic.
         */
        protected int                      $unreadReactionCount,
        /**
         * Notification settings for the topic.
         */
        protected ChatNotificationSettings $notificationSettings,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateForumTopic
    {
        return new static(
            $array['chat_id'],
            $array['message_thread_id'],
            $array['is_pinned'],
            $array['last_read_inbox_message_id'],
            $array['last_read_outbox_message_id'],
            $array['unread_mention_count'],
            $array['unread_reaction_count'],
            TdSchemaRegistry::fromArray($array['notification_settings']),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    public function getLastReadInboxMessageId(): int
    {
        return $this->lastReadInboxMessageId;
    }

    public function getLastReadOutboxMessageId(): int
    {
        return $this->lastReadOutboxMessageId;
    }

    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    public function getNotificationSettings(): ChatNotificationSettings
    {
        return $this->notificationSettings;
    }

    public function getUnreadMentionCount(): int
    {
        return $this->unreadMentionCount;
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
            'message_thread_id'           => $this->messageThreadId,
            'is_pinned'                   => $this->isPinned,
            'last_read_inbox_message_id'  => $this->lastReadInboxMessageId,
            'last_read_outbox_message_id' => $this->lastReadOutboxMessageId,
            'unread_mention_count'        => $this->unreadMentionCount,
            'unread_reaction_count'       => $this->unreadReactionCount,
            'notification_settings'       => $this->notificationSettings->typeSerialize(),
        ];
    }
}

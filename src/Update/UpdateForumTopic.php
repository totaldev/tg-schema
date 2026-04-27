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
    public const string TYPE_NAME = 'updateForumTopic';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int                      $chatId,
        /**
         * Forum topic identifier of the topic.
         */
        protected int                      $forumTopicId,
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
         * Notification settings for the topic.
         */
        protected ChatNotificationSettings $notificationSettings,
        /**
         * Number of unread messages with a mention/reply in the topic.
         */
        protected int                      $unreadMentionCount,
        /**
         * Number of messages with unread reactions in the topic.
         */
        protected int                      $unreadReactionCount,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateForumTopic
    {
        return new static(
            chatId                 : $array['chat_id'],
            forumTopicId           : $array['forum_topic_id'],
            isPinned               : $array['is_pinned'],
            lastReadInboxMessageId : $array['last_read_inbox_message_id'],
            lastReadOutboxMessageId: $array['last_read_outbox_message_id'],
            notificationSettings   : TdSchemaRegistry::fromArray($array['notification_settings']),
            unreadMentionCount     : $array['unread_mention_count'],
            unreadReactionCount    : $array['unread_reaction_count'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getForumTopicId(): int
    {
        return $this->forumTopicId;
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

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setForumTopicId(int $value): static
    {
        $this->forumTopicId = $value;

        return $this;
    }

    public function setIsPinned(bool $value): static
    {
        $this->isPinned = $value;

        return $this;
    }

    public function setLastReadInboxMessageId(int $value): static
    {
        $this->lastReadInboxMessageId = $value;

        return $this;
    }

    public function setLastReadOutboxMessageId(int $value): static
    {
        $this->lastReadOutboxMessageId = $value;

        return $this;
    }

    public function setNotificationSettings(ChatNotificationSettings $value): static
    {
        $this->notificationSettings = $value;

        return $this;
    }

    public function setUnreadMentionCount(int $value): static
    {
        $this->unreadMentionCount = $value;

        return $this;
    }

    public function setUnreadReactionCount(int $value): static
    {
        $this->unreadReactionCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                       => static::TYPE_NAME,
            'chat_id'                     => $this->chatId,
            'forum_topic_id'              => $this->forumTopicId,
            'is_pinned'                   => $this->isPinned,
            'last_read_inbox_message_id'  => $this->lastReadInboxMessageId,
            'last_read_outbox_message_id' => $this->lastReadOutboxMessageId,
            'notification_settings'       => $this->notificationSettings->jsonSerialize(),
            'unread_mention_count'        => $this->unreadMentionCount,
            'unread_reaction_count'       => $this->unreadReactionCount,
        ];
    }
}

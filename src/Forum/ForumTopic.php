<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Forum;

use Totaldev\TgSchema\Chat\ChatNotificationSettings;
use Totaldev\TgSchema\Draft\DraftMessage;
use Totaldev\TgSchema\Message\Message;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a forum topic.
 */
class ForumTopic extends TdObject
{
    public const string TYPE_NAME = 'forumTopic';

    public function __construct(
        /**
         * A draft of a message in the topic; may be null if none.
         */
        protected ?DraftMessage            $draftMessage,
        /**
         * Basic information about the topic.
         */
        protected ForumTopicInfo           $info,
        /**
         * True, if the topic is pinned in the topic list.
         */
        protected bool                     $isPinned,
        /**
         * Last message in the topic; may be null if unknown.
         */
        protected ?Message                 $lastMessage,
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
         * A parameter used to determine order of the topic in the topic list. Topics must be sorted by the order in descending order.
         */
        protected int                      $order,
        /**
         * Number of unread messages in the topic.
         */
        protected int                      $unreadCount,
        /**
         * Number of unread messages with a mention/reply in the topic.
         */
        protected int                      $unreadMentionCount,
        /**
         * Number of messages with unread reactions in the topic.
         */
        protected int                      $unreadReactionCount,
    ) {}

    public static function fromArray(array $array): ForumTopic
    {
        return new static(
            draftMessage           : (isset($array['draft_message']) ? TdSchemaRegistry::fromArray($array['draft_message']) : null),
            info                   : TdSchemaRegistry::fromArray($array['info']),
            isPinned               : $array['is_pinned'],
            lastMessage            : (isset($array['last_message']) ? TdSchemaRegistry::fromArray($array['last_message']) : null),
            lastReadInboxMessageId : $array['last_read_inbox_message_id'],
            lastReadOutboxMessageId: $array['last_read_outbox_message_id'],
            notificationSettings   : TdSchemaRegistry::fromArray($array['notification_settings']),
            order                  : $array['order'],
            unreadCount            : $array['unread_count'],
            unreadMentionCount     : $array['unread_mention_count'],
            unreadReactionCount    : $array['unread_reaction_count'],
        );
    }

    public function getDraftMessage(): ?DraftMessage
    {
        return $this->draftMessage;
    }

    public function getInfo(): ForumTopicInfo
    {
        return $this->info;
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
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

    public function getNotificationSettings(): ChatNotificationSettings
    {
        return $this->notificationSettings;
    }

    public function getOrder(): int
    {
        return $this->order;
    }

    public function getUnreadCount(): int
    {
        return $this->unreadCount;
    }

    public function getUnreadMentionCount(): int
    {
        return $this->unreadMentionCount;
    }

    public function getUnreadReactionCount(): int
    {
        return $this->unreadReactionCount;
    }

    public function setDraftMessage(?DraftMessage $value): static
    {
        $this->draftMessage = $value;

        return $this;
    }

    public function setInfo(ForumTopicInfo $value): static
    {
        $this->info = $value;

        return $this;
    }

    public function setIsPinned(bool $value): static
    {
        $this->isPinned = $value;

        return $this;
    }

    public function setLastMessage(?Message $value): static
    {
        $this->lastMessage = $value;

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

    public function setOrder(int $value): static
    {
        $this->order = $value;

        return $this;
    }

    public function setUnreadCount(int $value): static
    {
        $this->unreadCount = $value;

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
            'draft_message'               => (null !== $this->draftMessage ? $this->draftMessage->jsonSerialize() : null),
            'info'                        => $this->info->jsonSerialize(),
            'is_pinned'                   => $this->isPinned,
            'last_message'                => (null !== $this->lastMessage ? $this->lastMessage->jsonSerialize() : null),
            'last_read_inbox_message_id'  => $this->lastReadInboxMessageId,
            'last_read_outbox_message_id' => $this->lastReadOutboxMessageId,
            'notification_settings'       => $this->notificationSettings->jsonSerialize(),
            'order'                       => $this->order,
            'unread_count'                => $this->unreadCount,
            'unread_mention_count'        => $this->unreadMentionCount,
            'unread_reaction_count'       => $this->unreadReactionCount,
        ];
    }
}

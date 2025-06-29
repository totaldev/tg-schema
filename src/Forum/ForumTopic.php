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
    public const TYPE_NAME = 'forumTopic';

    public function __construct(
        /**
         * Basic information about the topic.
         */
        protected ForumTopicInfo           $info,
        /**
         * Last message in the topic; may be null if unknown.
         */
        protected ?Message                 $lastMessage,
        /**
         * A parameter used to determine order of the topic in the topic list. Topics must be sorted by the order in descending order.
         */
        protected int                      $order,
        /**
         * True, if the topic is pinned in the topic list.
         */
        protected bool                     $isPinned,
        /**
         * Number of unread messages in the topic.
         */
        protected int                      $unreadCount,
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
        /**
         * A draft of a message in the topic; may be null if none.
         */
        protected ?DraftMessage            $draftMessage,
    ) {}

    public static function fromArray(array $array): ForumTopic
    {
        return new static(
            TdSchemaRegistry::fromArray($array['info']),
            isset($array['last_message']) ? TdSchemaRegistry::fromArray($array['last_message']) : null,
            $array['order'],
            $array['is_pinned'],
            $array['unread_count'],
            $array['last_read_inbox_message_id'],
            $array['last_read_outbox_message_id'],
            $array['unread_mention_count'],
            $array['unread_reaction_count'],
            TdSchemaRegistry::fromArray($array['notification_settings']),
            isset($array['draft_message']) ? TdSchemaRegistry::fromArray($array['draft_message']) : null,
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

    public function typeSerialize(): array
    {
        return [
            '@type'                       => static::TYPE_NAME,
            'info'                        => $this->info->typeSerialize(),
            'last_message'                => $this->lastMessage ?? null,
            'order'                       => $this->order,
            'is_pinned'                   => $this->isPinned,
            'unread_count'                => $this->unreadCount,
            'last_read_inbox_message_id'  => $this->lastReadInboxMessageId,
            'last_read_outbox_message_id' => $this->lastReadOutboxMessageId,
            'unread_mention_count'        => $this->unreadMentionCount,
            'unread_reaction_count'       => $this->unreadReactionCount,
            'notification_settings'       => $this->notificationSettings->typeSerialize(),
            'draft_message'               => $this->draftMessage ?? null,
        ];
    }
}

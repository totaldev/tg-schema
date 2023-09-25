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
 * Describes a forum topic
 */
class ForumTopic extends TdObject
{
    public const TYPE_NAME = 'forumTopic';

    /**
     * A draft of a message in the topic; may be null if none
     *
     * @var DraftMessage|null
     */
    protected ?DraftMessage $draftMessage;

    /**
     * Basic information about the topic
     *
     * @var ForumTopicInfo
     */
    protected ForumTopicInfo $info;

    /**
     * True, if the topic is pinned in the topic list
     *
     * @var bool
     */
    protected bool $isPinned;

    /**
     * Last message in the topic; may be null if unknown
     *
     * @var Message|null
     */
    protected ?Message $lastMessage;

    /**
     * Identifier of the last read incoming message
     *
     * @var int
     */
    protected int $lastReadInboxMessageId;

    /**
     * Identifier of the last read outgoing message
     *
     * @var int
     */
    protected int $lastReadOutboxMessageId;

    /**
     * Notification settings for the topic
     *
     * @var ChatNotificationSettings
     */
    protected ChatNotificationSettings $notificationSettings;

    /**
     * Number of unread messages in the topic
     *
     * @var int
     */
    protected int $unreadCount;

    /**
     * Number of unread messages with a mention/reply in the topic
     *
     * @var int
     */
    protected int $unreadMentionCount;

    /**
     * Number of messages with unread reactions in the topic
     *
     * @var int
     */
    protected int $unreadReactionCount;

    public function __construct(
        ForumTopicInfo           $info,
        ?Message                 $lastMessage,
        bool                     $isPinned,
        int                      $unreadCount,
        int                      $lastReadInboxMessageId,
        int                      $lastReadOutboxMessageId,
        int                      $unreadMentionCount,
        int                      $unreadReactionCount,
        ChatNotificationSettings $notificationSettings,
        ?DraftMessage            $draftMessage,
    )
    {
        $this->info = $info;
        $this->lastMessage = $lastMessage;
        $this->isPinned = $isPinned;
        $this->unreadCount = $unreadCount;
        $this->lastReadInboxMessageId = $lastReadInboxMessageId;
        $this->lastReadOutboxMessageId = $lastReadOutboxMessageId;
        $this->unreadMentionCount = $unreadMentionCount;
        $this->unreadReactionCount = $unreadReactionCount;
        $this->notificationSettings = $notificationSettings;
        $this->draftMessage = $draftMessage;
    }

    public static function fromArray(array $array): ForumTopic
    {
        return new static(
            TdSchemaRegistry::fromArray($array['info']),
            (isset($array['last_message']) ? TdSchemaRegistry::fromArray($array['last_message']) : null),
            $array['is_pinned'],
            $array['unread_count'],
            $array['last_read_inbox_message_id'],
            $array['last_read_outbox_message_id'],
            $array['unread_mention_count'],
            $array['unread_reaction_count'],
            TdSchemaRegistry::fromArray($array['notification_settings']),
            (isset($array['draft_message']) ? TdSchemaRegistry::fromArray($array['draft_message']) : null),
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
            '@type' => static::TYPE_NAME,
            'info' => $this->info->typeSerialize(),
            'last_message' => (isset($this->lastMessage) ? $this->lastMessage : null),
            'is_pinned' => $this->isPinned,
            'unread_count' => $this->unreadCount,
            'last_read_inbox_message_id' => $this->lastReadInboxMessageId,
            'last_read_outbox_message_id' => $this->lastReadOutboxMessageId,
            'unread_mention_count' => $this->unreadMentionCount,
            'unread_reaction_count' => $this->unreadReactionCount,
            'notification_settings' => $this->notificationSettings->typeSerialize(),
            'draft_message' => (isset($this->draftMessage) ? $this->draftMessage : null),
        ];
    }
}

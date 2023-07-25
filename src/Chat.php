<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * A chat. (Can be a private chat, basic group, supergroup, or secret chat)
 */
class Chat extends TdObject
{
    public const TYPE_NAME = 'chat';

    /**
     * Chat unique identifier
     *
     * @var int
     */
    protected int $id;

    /**
     * Type of the chat
     *
     * @var ChatType
     */
    protected ChatType $type;

    /**
     * Chat title
     *
     * @var string
     */
    protected string $title;

    /**
     * Chat photo; may be null
     *
     * @var ChatPhotoInfo|null
     */
    protected ?ChatPhotoInfo $photo;

    /**
     * Actions that non-administrator chat members are allowed to take in the chat
     *
     * @var ChatPermissions
     */
    protected ChatPermissions $permissions;

    /**
     * Last message in the chat; may be null
     *
     * @var Message|null
     */
    protected ?Message $lastMessage;

    /**
     * Positions of the chat in chat lists
     *
     * @var ChatPosition[]
     */
    protected array $positions;

    /**
     * Identifier of a user or chat that is selected to send messages in the chat; may be null if the user can't change message sender
     *
     * @var MessageSender|null
     */
    protected ?MessageSender $messageSenderId;

    /**
     * True, if chat content can't be saved locally, forwarded, or copied
     *
     * @var bool
     */
    protected bool $hasProtectedContent;

    /**
     * True, if translation of all messages in the chat must be suggested to the user
     *
     * @var bool
     */
    protected bool $isTranslatable;

    /**
     * True, if the chat is marked as unread
     *
     * @var bool
     */
    protected bool $isMarkedAsUnread;

    /**
     * True, if the chat is blocked by the current user and private messages from the chat can't be received
     *
     * @var bool
     */
    protected bool $isBlocked;

    /**
     * True, if the chat has scheduled messages
     *
     * @var bool
     */
    protected bool $hasScheduledMessages;

    /**
     * True, if the chat messages can be deleted only for the current user while other users will continue to see the messages
     *
     * @var bool
     */
    protected bool $canBeDeletedOnlyForSelf;

    /**
     * True, if the chat messages can be deleted for all users
     *
     * @var bool
     */
    protected bool $canBeDeletedForAllUsers;

    /**
     * True, if the chat can be reported to Telegram moderators through reportChat or reportChatPhoto
     *
     * @var bool
     */
    protected bool $canBeReported;

    /**
     * Default value of the disable_notification parameter, used when a message is sent to the chat
     *
     * @var bool
     */
    protected bool $defaultDisableNotification;

    /**
     * Number of unread messages in the chat
     *
     * @var int
     */
    protected int $unreadCount;

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
     * Number of unread messages with a mention/reply in the chat
     *
     * @var int
     */
    protected int $unreadMentionCount;

    /**
     * Number of messages with unread reactions in the chat
     *
     * @var int
     */
    protected int $unreadReactionCount;

    /**
     * Notification settings for the chat
     *
     * @var ChatNotificationSettings
     */
    protected ChatNotificationSettings $notificationSettings;

    /**
     * Types of reaction, available in the chat
     *
     * @var ChatAvailableReactions
     */
    protected ChatAvailableReactions $availableReactions;

    /**
     * Current message auto-delete or self-destruct timer setting for the chat, in seconds; 0 if disabled. Self-destruct timer in secret chats starts after the message or its content is viewed. Auto-delete timer in other chats starts from the send date
     *
     * @var int
     */
    protected int $messageAutoDeleteTime;

    /**
     * Background set for the chat; may be null if none
     *
     * @var ChatBackground|null
     */
    protected ?ChatBackground $background;

    /**
     * If non-empty, name of a theme, set for the chat
     *
     * @var string
     */
    protected string $themeName;

    /**
     * Information about actions which must be possible to do through the chat action bar; may be null
     *
     * @var ChatActionBar|null
     */
    protected ?ChatActionBar $actionBar;

    /**
     * Information about video chat of the chat
     *
     * @var VideoChat
     */
    protected VideoChat $videoChat;

    /**
     * Information about pending join requests; may be null
     *
     * @var ChatJoinRequestsInfo|null
     */
    protected ?ChatJoinRequestsInfo $pendingJoinRequests;

    /**
     * Identifier of the message from which reply markup needs to be used; 0 if there is no default custom reply markup in the chat
     *
     * @var int
     */
    protected int $replyMarkupMessageId;

    /**
     * A draft of a message in the chat; may be null
     *
     * @var DraftMessage|null
     */
    protected ?DraftMessage $draftMessage;

    /**
     * Application-specific data associated with the chat. (For example, the chat scroll position or local chat notification settings can be stored here.) Persistent if the message database is used
     *
     * @var string
     */
    protected string $clientData;

    public function __construct(
        int $id,
        ChatType $type,
        string $title,
        ?ChatPhotoInfo $photo,
        ChatPermissions $permissions,
        ?Message $lastMessage,
        array $positions,
        ?MessageSender $messageSenderId,
        bool $hasProtectedContent,
        bool $isTranslatable,
        bool $isMarkedAsUnread,
        bool $isBlocked,
        bool $hasScheduledMessages,
        bool $canBeDeletedOnlyForSelf,
        bool $canBeDeletedForAllUsers,
        bool $canBeReported,
        bool $defaultDisableNotification,
        int $unreadCount,
        int $lastReadInboxMessageId,
        int $lastReadOutboxMessageId,
        int $unreadMentionCount,
        int $unreadReactionCount,
        ChatNotificationSettings $notificationSettings,
        ChatAvailableReactions $availableReactions,
        int $messageAutoDeleteTime,
        ?ChatBackground $background,
        string $themeName,
        ?ChatActionBar $actionBar,
        VideoChat $videoChat,
        ?ChatJoinRequestsInfo $pendingJoinRequests,
        int $replyMarkupMessageId,
        ?DraftMessage $draftMessage,
        string $clientData
    ) {
        $this->id = $id;
        $this->type = $type;
        $this->title = $title;
        $this->photo = $photo;
        $this->permissions = $permissions;
        $this->lastMessage = $lastMessage;
        $this->positions = $positions;
        $this->messageSenderId = $messageSenderId;
        $this->hasProtectedContent = $hasProtectedContent;
        $this->isTranslatable = $isTranslatable;
        $this->isMarkedAsUnread = $isMarkedAsUnread;
        $this->isBlocked = $isBlocked;
        $this->hasScheduledMessages = $hasScheduledMessages;
        $this->canBeDeletedOnlyForSelf = $canBeDeletedOnlyForSelf;
        $this->canBeDeletedForAllUsers = $canBeDeletedForAllUsers;
        $this->canBeReported = $canBeReported;
        $this->defaultDisableNotification = $defaultDisableNotification;
        $this->unreadCount = $unreadCount;
        $this->lastReadInboxMessageId = $lastReadInboxMessageId;
        $this->lastReadOutboxMessageId = $lastReadOutboxMessageId;
        $this->unreadMentionCount = $unreadMentionCount;
        $this->unreadReactionCount = $unreadReactionCount;
        $this->notificationSettings = $notificationSettings;
        $this->availableReactions = $availableReactions;
        $this->messageAutoDeleteTime = $messageAutoDeleteTime;
        $this->background = $background;
        $this->themeName = $themeName;
        $this->actionBar = $actionBar;
        $this->videoChat = $videoChat;
        $this->pendingJoinRequests = $pendingJoinRequests;
        $this->replyMarkupMessageId = $replyMarkupMessageId;
        $this->draftMessage = $draftMessage;
        $this->clientData = $clientData;
    }

    public static function fromArray(array $array): Chat
    {
        return new static(
            $array['id'],
            TdSchemaRegistry::fromArray($array['type']),
            $array['title'],
            (isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null),
            TdSchemaRegistry::fromArray($array['permissions']),
            (isset($array['last_message']) ? TdSchemaRegistry::fromArray($array['last_message']) : null),
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['positions']),
            (isset($array['message_sender_id']) ? TdSchemaRegistry::fromArray($array['message_sender_id']) : null),
            $array['has_protected_content'],
            $array['is_translatable'],
            $array['is_marked_as_unread'],
            $array['is_blocked'],
            $array['has_scheduled_messages'],
            $array['can_be_deleted_only_for_self'],
            $array['can_be_deleted_for_all_users'],
            $array['can_be_reported'],
            $array['default_disable_notification'],
            $array['unread_count'],
            $array['last_read_inbox_message_id'],
            $array['last_read_outbox_message_id'],
            $array['unread_mention_count'],
            $array['unread_reaction_count'],
            TdSchemaRegistry::fromArray($array['notification_settings']),
            TdSchemaRegistry::fromArray($array['available_reactions']),
            $array['message_auto_delete_time'],
            (isset($array['background']) ? TdSchemaRegistry::fromArray($array['background']) : null),
            $array['theme_name'],
            (isset($array['action_bar']) ? TdSchemaRegistry::fromArray($array['action_bar']) : null),
            TdSchemaRegistry::fromArray($array['video_chat']),
            (isset($array['pending_join_requests']) ? TdSchemaRegistry::fromArray($array['pending_join_requests']) : null),
            $array['reply_markup_message_id'],
            (isset($array['draft_message']) ? TdSchemaRegistry::fromArray($array['draft_message']) : null),
            $array['client_data'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id' => $this->id,
            'type' => $this->type->typeSerialize(),
            'title' => $this->title,
            'photo' => (isset($this->photo) ? $this->photo : null),
            'permissions' => $this->permissions->typeSerialize(),
            'last_message' => (isset($this->lastMessage) ? $this->lastMessage : null),
            array_map(fn($x) => $x->typeSerialize(), $this->positions),
            'message_sender_id' => (isset($this->messageSenderId) ? $this->messageSenderId : null),
            'has_protected_content' => $this->hasProtectedContent,
            'is_translatable' => $this->isTranslatable,
            'is_marked_as_unread' => $this->isMarkedAsUnread,
            'is_blocked' => $this->isBlocked,
            'has_scheduled_messages' => $this->hasScheduledMessages,
            'can_be_deleted_only_for_self' => $this->canBeDeletedOnlyForSelf,
            'can_be_deleted_for_all_users' => $this->canBeDeletedForAllUsers,
            'can_be_reported' => $this->canBeReported,
            'default_disable_notification' => $this->defaultDisableNotification,
            'unread_count' => $this->unreadCount,
            'last_read_inbox_message_id' => $this->lastReadInboxMessageId,
            'last_read_outbox_message_id' => $this->lastReadOutboxMessageId,
            'unread_mention_count' => $this->unreadMentionCount,
            'unread_reaction_count' => $this->unreadReactionCount,
            'notification_settings' => $this->notificationSettings->typeSerialize(),
            'available_reactions' => $this->availableReactions->typeSerialize(),
            'message_auto_delete_time' => $this->messageAutoDeleteTime,
            'background' => (isset($this->background) ? $this->background : null),
            'theme_name' => $this->themeName,
            'action_bar' => (isset($this->actionBar) ? $this->actionBar : null),
            'video_chat' => $this->videoChat->typeSerialize(),
            'pending_join_requests' => (isset($this->pendingJoinRequests) ? $this->pendingJoinRequests : null),
            'reply_markup_message_id' => $this->replyMarkupMessageId,
            'draft_message' => (isset($this->draftMessage) ? $this->draftMessage : null),
            'client_data' => $this->clientData,
        ];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getType(): ChatType
    {
        return $this->type;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getPhoto(): ?ChatPhotoInfo
    {
        return $this->photo;
    }

    public function getPermissions(): ChatPermissions
    {
        return $this->permissions;
    }

    public function getLastMessage(): ?Message
    {
        return $this->lastMessage;
    }

    public function getPositions(): array
    {
        return $this->positions;
    }

    public function getMessageSenderId(): ?MessageSender
    {
        return $this->messageSenderId;
    }

    public function getHasProtectedContent(): bool
    {
        return $this->hasProtectedContent;
    }

    public function getIsTranslatable(): bool
    {
        return $this->isTranslatable;
    }

    public function getIsMarkedAsUnread(): bool
    {
        return $this->isMarkedAsUnread;
    }

    public function getIsBlocked(): bool
    {
        return $this->isBlocked;
    }

    public function getHasScheduledMessages(): bool
    {
        return $this->hasScheduledMessages;
    }

    public function getCanBeDeletedOnlyForSelf(): bool
    {
        return $this->canBeDeletedOnlyForSelf;
    }

    public function getCanBeDeletedForAllUsers(): bool
    {
        return $this->canBeDeletedForAllUsers;
    }

    public function getCanBeReported(): bool
    {
        return $this->canBeReported;
    }

    public function getDefaultDisableNotification(): bool
    {
        return $this->defaultDisableNotification;
    }

    public function getUnreadCount(): int
    {
        return $this->unreadCount;
    }

    public function getLastReadInboxMessageId(): int
    {
        return $this->lastReadInboxMessageId;
    }

    public function getLastReadOutboxMessageId(): int
    {
        return $this->lastReadOutboxMessageId;
    }

    public function getUnreadMentionCount(): int
    {
        return $this->unreadMentionCount;
    }

    public function getUnreadReactionCount(): int
    {
        return $this->unreadReactionCount;
    }

    public function getNotificationSettings(): ChatNotificationSettings
    {
        return $this->notificationSettings;
    }

    public function getAvailableReactions(): ChatAvailableReactions
    {
        return $this->availableReactions;
    }

    public function getMessageAutoDeleteTime(): int
    {
        return $this->messageAutoDeleteTime;
    }

    public function getBackground(): ?ChatBackground
    {
        return $this->background;
    }

    public function getThemeName(): string
    {
        return $this->themeName;
    }

    public function getActionBar(): ?ChatActionBar
    {
        return $this->actionBar;
    }

    public function getVideoChat(): VideoChat
    {
        return $this->videoChat;
    }

    public function getPendingJoinRequests(): ?ChatJoinRequestsInfo
    {
        return $this->pendingJoinRequests;
    }

    public function getReplyMarkupMessageId(): int
    {
        return $this->replyMarkupMessageId;
    }

    public function getDraftMessage(): ?DraftMessage
    {
        return $this->draftMessage;
    }

    public function getClientData(): string
    {
        return $this->clientData;
    }
}

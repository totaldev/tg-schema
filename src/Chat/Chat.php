<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\Block\BlockList;
use Totaldev\TgSchema\Business\BusinessBotManageBar;
use Totaldev\TgSchema\Draft\DraftMessage;
use Totaldev\TgSchema\Emoji\EmojiStatus;
use Totaldev\TgSchema\Message\Message;
use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Video\VideoChat;

/**
 * A chat. (Can be a private chat, basic group, supergroup, or secret chat).
 */
class Chat extends TdObject
{
    public const TYPE_NAME = 'chat';

    public function __construct(
        /**
         * Chat unique identifier.
         */
        protected int                      $id,
        /**
         * Type of the chat.
         */
        protected ChatType                 $type,
        /**
         * Chat title.
         */
        protected string                   $title,
        /**
         * Chat photo; may be null.
         */
        protected ?ChatPhotoInfo           $photo,
        /**
         * Identifier of the accent color for message sender name, and backgrounds of chat photo, reply header, and link preview.
         */
        protected int                      $accentColorId,
        /**
         * Identifier of a custom emoji to be shown on the reply header and link preview background for messages sent by the chat; 0 if none.
         */
        protected int                      $backgroundCustomEmojiId,
        /**
         * Identifier of the profile accent color for the chat's profile; -1 if none.
         */
        protected int                      $profileAccentColorId,
        /**
         * Identifier of a custom emoji to be shown on the background of the chat's profile; 0 if none.
         */
        protected int                      $profileBackgroundCustomEmojiId,
        /**
         * Actions that non-administrator chat members are allowed to take in the chat.
         */
        protected ChatPermissions          $permissions,
        /**
         * Last message in the chat; may be null if none or unknown.
         */
        protected ?Message                 $lastMessage,
        /**
         * Positions of the chat in chat lists.
         *
         * @var ChatPosition[]
         */
        protected array                    $positions,
        /**
         * Chat lists to which the chat belongs. A chat can have a non-zero position in a chat list even it doesn't belong to the chat list and have no position in a chat list even it belongs to the chat list.
         *
         * @var ChatList[]
         */
        protected array                    $chatLists,
        /**
         * Identifier of a user or chat that is selected to send messages in the chat; may be null if the user can't change message sender.
         */
        protected ?MessageSender           $messageSenderId,
        /**
         * Block list to which the chat is added; may be null if none.
         */
        protected ?BlockList               $blockList,
        /**
         * True, if chat content can't be saved locally, forwarded, or copied.
         */
        protected bool                     $hasProtectedContent,
        /**
         * True, if translation of all messages in the chat must be suggested to the user.
         */
        protected bool                     $isTranslatable,
        /**
         * True, if the chat is marked as unread.
         */
        protected bool                     $isMarkedAsUnread,
        /**
         * True, if the chat is a forum supergroup that must be shown in the "View as topics" mode, or Saved Messages chat that must be shown in the "View as chats".
         */
        protected bool                     $viewAsTopics,
        /**
         * True, if the chat has scheduled messages.
         */
        protected bool                     $hasScheduledMessages,
        /**
         * True, if the chat messages can be deleted only for the current user while other users will continue to see the messages.
         */
        protected bool                     $canBeDeletedOnlyForSelf,
        /**
         * True, if the chat messages can be deleted for all users.
         */
        protected bool                     $canBeDeletedForAllUsers,
        /**
         * True, if the chat can be reported to Telegram moderators through reportChat or reportChatPhoto.
         */
        protected bool                     $canBeReported,
        /**
         * Default value of the disable_notification parameter, used when a message is sent to the chat.
         */
        protected bool                     $defaultDisableNotification,
        /**
         * Number of unread messages in the chat.
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
         * Number of unread messages with a mention/reply in the chat.
         */
        protected int                      $unreadMentionCount,
        /**
         * Number of messages with unread reactions in the chat.
         */
        protected int                      $unreadReactionCount,
        /**
         * Notification settings for the chat.
         */
        protected ChatNotificationSettings $notificationSettings,
        /**
         * Types of reaction, available in the chat.
         */
        protected ChatAvailableReactions   $availableReactions,
        /**
         * Current message auto-delete or self-destruct timer setting for the chat, in seconds; 0 if disabled. Self-destruct timer in secret chats starts after the message or its content is viewed. Auto-delete timer in other chats starts from the send date.
         */
        protected int                      $messageAutoDeleteTime,
        /**
         * Emoji status to be shown along with chat title; may be null.
         */
        protected ?EmojiStatus             $emojiStatus,
        /**
         * Background set for the chat; may be null if none.
         */
        protected ?ChatBackground          $background,
        /**
         * If non-empty, name of a theme, set for the chat.
         */
        protected string                   $themeName,
        /**
         * Information about actions which must be possible to do through the chat action bar; may be null if none.
         */
        protected ?ChatActionBar           $actionBar,
        /**
         * Information about bar for managing a business bot in the chat; may be null if none.
         */
        protected ?BusinessBotManageBar    $businessBotManageBar,
        /**
         * Information about video chat of the chat.
         */
        protected VideoChat                $videoChat,
        /**
         * Information about pending join requests; may be null if none.
         */
        protected ?ChatJoinRequestsInfo    $pendingJoinRequests,
        /**
         * Identifier of the message from which reply markup needs to be used; 0 if there is no default custom reply markup in the chat.
         */
        protected int                      $replyMarkupMessageId,
        /**
         * A draft of a message in the chat; may be null if none.
         */
        protected ?DraftMessage            $draftMessage,
        /**
         * Application-specific data associated with the chat. (For example, the chat scroll position or local chat notification settings can be stored here.) Persistent if the message database is used.
         */
        protected string                   $clientData,
    ) {}

    public static function fromArray(array $array): Chat
    {
        return new static(
            $array['id'],
            TdSchemaRegistry::fromArray($array['type']),
            $array['title'],
            isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null,
            $array['accent_color_id'],
            $array['background_custom_emoji_id'],
            $array['profile_accent_color_id'],
            $array['profile_background_custom_emoji_id'],
            TdSchemaRegistry::fromArray($array['permissions']),
            isset($array['last_message']) ? TdSchemaRegistry::fromArray($array['last_message']) : null,
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['positions']),
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['chat_lists']),
            isset($array['message_sender_id']) ? TdSchemaRegistry::fromArray($array['message_sender_id']) : null,
            isset($array['block_list']) ? TdSchemaRegistry::fromArray($array['block_list']) : null,
            $array['has_protected_content'],
            $array['is_translatable'],
            $array['is_marked_as_unread'],
            $array['view_as_topics'],
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
            isset($array['emoji_status']) ? TdSchemaRegistry::fromArray($array['emoji_status']) : null,
            isset($array['background']) ? TdSchemaRegistry::fromArray($array['background']) : null,
            $array['theme_name'],
            isset($array['action_bar']) ? TdSchemaRegistry::fromArray($array['action_bar']) : null,
            isset($array['business_bot_manage_bar']) ? TdSchemaRegistry::fromArray($array['business_bot_manage_bar']) : null,
            TdSchemaRegistry::fromArray($array['video_chat']),
            isset($array['pending_join_requests']) ? TdSchemaRegistry::fromArray($array['pending_join_requests']) : null,
            $array['reply_markup_message_id'],
            isset($array['draft_message']) ? TdSchemaRegistry::fromArray($array['draft_message']) : null,
            $array['client_data'],
        );
    }

    public function getAccentColorId(): int
    {
        return $this->accentColorId;
    }

    public function getActionBar(): ?ChatActionBar
    {
        return $this->actionBar;
    }

    public function getAvailableReactions(): ChatAvailableReactions
    {
        return $this->availableReactions;
    }

    public function getBackground(): ?ChatBackground
    {
        return $this->background;
    }

    public function getBackgroundCustomEmojiId(): int
    {
        return $this->backgroundCustomEmojiId;
    }

    public function getBlockList(): ?BlockList
    {
        return $this->blockList;
    }

    public function getBusinessBotManageBar(): ?BusinessBotManageBar
    {
        return $this->businessBotManageBar;
    }

    public function getCanBeDeletedForAllUsers(): bool
    {
        return $this->canBeDeletedForAllUsers;
    }

    public function getCanBeDeletedOnlyForSelf(): bool
    {
        return $this->canBeDeletedOnlyForSelf;
    }

    public function getCanBeReported(): bool
    {
        return $this->canBeReported;
    }

    public function getChatLists(): array
    {
        return $this->chatLists;
    }

    public function getClientData(): string
    {
        return $this->clientData;
    }

    public function getDefaultDisableNotification(): bool
    {
        return $this->defaultDisableNotification;
    }

    public function getDraftMessage(): ?DraftMessage
    {
        return $this->draftMessage;
    }

    public function getEmojiStatus(): ?EmojiStatus
    {
        return $this->emojiStatus;
    }

    public function getHasProtectedContent(): bool
    {
        return $this->hasProtectedContent;
    }

    public function getHasScheduledMessages(): bool
    {
        return $this->hasScheduledMessages;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getIsMarkedAsUnread(): bool
    {
        return $this->isMarkedAsUnread;
    }

    public function getIsTranslatable(): bool
    {
        return $this->isTranslatable;
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

    public function getMessageAutoDeleteTime(): int
    {
        return $this->messageAutoDeleteTime;
    }

    public function getMessageSenderId(): ?MessageSender
    {
        return $this->messageSenderId;
    }

    public function getNotificationSettings(): ChatNotificationSettings
    {
        return $this->notificationSettings;
    }

    public function getPendingJoinRequests(): ?ChatJoinRequestsInfo
    {
        return $this->pendingJoinRequests;
    }

    public function getPermissions(): ChatPermissions
    {
        return $this->permissions;
    }

    public function getPhoto(): ?ChatPhotoInfo
    {
        return $this->photo;
    }

    public function getPositions(): array
    {
        return $this->positions;
    }

    public function getProfileAccentColorId(): int
    {
        return $this->profileAccentColorId;
    }

    public function getProfileBackgroundCustomEmojiId(): int
    {
        return $this->profileBackgroundCustomEmojiId;
    }

    public function getReplyMarkupMessageId(): int
    {
        return $this->replyMarkupMessageId;
    }

    public function getThemeName(): string
    {
        return $this->themeName;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getType(): ChatType
    {
        return $this->type;
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

    public function getVideoChat(): VideoChat
    {
        return $this->videoChat;
    }

    public function getViewAsTopics(): bool
    {
        return $this->viewAsTopics;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                              => static::TYPE_NAME,
            'id'                                 => $this->id,
            'type'                               => $this->type->typeSerialize(),
            'title'                              => $this->title,
            'photo'                              => (isset($this->photo) ? $this->photo : null),
            'accent_color_id'                    => $this->accentColorId,
            'background_custom_emoji_id'         => $this->backgroundCustomEmojiId,
            'profile_accent_color_id'            => $this->profileAccentColorId,
            'profile_background_custom_emoji_id' => $this->profileBackgroundCustomEmojiId,
            'permissions'                        => $this->permissions->typeSerialize(),
            'last_message'                       => (isset($this->lastMessage) ? $this->lastMessage : null),
            array_map(fn($x) => $x->typeSerialize(), $this->positions),
            array_map(fn($x) => $x->typeSerialize(), $this->chatLists),
            'message_sender_id'                  => (isset($this->messageSenderId) ? $this->messageSenderId : null),
            'block_list'                         => (isset($this->blockList) ? $this->blockList : null),
            'has_protected_content'              => $this->hasProtectedContent,
            'is_translatable'                    => $this->isTranslatable,
            'is_marked_as_unread'                => $this->isMarkedAsUnread,
            'view_as_topics'                     => $this->viewAsTopics,
            'has_scheduled_messages'             => $this->hasScheduledMessages,
            'can_be_deleted_only_for_self'       => $this->canBeDeletedOnlyForSelf,
            'can_be_deleted_for_all_users'       => $this->canBeDeletedForAllUsers,
            'can_be_reported'                    => $this->canBeReported,
            'default_disable_notification'       => $this->defaultDisableNotification,
            'unread_count'                       => $this->unreadCount,
            'last_read_inbox_message_id'         => $this->lastReadInboxMessageId,
            'last_read_outbox_message_id'        => $this->lastReadOutboxMessageId,
            'unread_mention_count'               => $this->unreadMentionCount,
            'unread_reaction_count'              => $this->unreadReactionCount,
            'notification_settings'              => $this->notificationSettings->typeSerialize(),
            'available_reactions'                => $this->availableReactions->typeSerialize(),
            'message_auto_delete_time'           => $this->messageAutoDeleteTime,
            'emoji_status'                       => (isset($this->emojiStatus) ? $this->emojiStatus : null),
            'background'                         => (isset($this->background) ? $this->background : null),
            'theme_name'                         => $this->themeName,
            'action_bar'                         => (isset($this->actionBar) ? $this->actionBar : null),
            'business_bot_manage_bar'            => (isset($this->businessBotManageBar) ? $this->businessBotManageBar : null),
            'video_chat'                         => $this->videoChat->typeSerialize(),
            'pending_join_requests'              => (isset($this->pendingJoinRequests) ? $this->pendingJoinRequests : null),
            'reply_markup_message_id'            => $this->replyMarkupMessageId,
            'draft_message'                      => (isset($this->draftMessage) ? $this->draftMessage : null),
            'client_data'                        => $this->clientData,
        ];
    }
}

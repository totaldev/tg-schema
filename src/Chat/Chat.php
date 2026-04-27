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
use Totaldev\TgSchema\Upgraded\UpgradedGiftColors;
use Totaldev\TgSchema\Video\VideoChat;

/**
 * A chat. (Can be a private chat, basic group, supergroup, or secret chat).
 */
class Chat extends TdObject
{
    public const string TYPE_NAME = 'chat';

    public function __construct(
        /**
         * Identifier of the accent color for message sender name, and backgrounds of chat photo, reply header, and link preview.
         */
        protected int                      $accentColorId,
        /**
         * Information about actions which must be possible to do through the chat action bar; may be null if none.
         */
        protected ?ChatActionBar           $actionBar,
        /**
         * Types of reaction, available in the chat.
         */
        protected ChatAvailableReactions   $availableReactions,
        /**
         * Background set for the chat; may be null if none.
         */
        protected ?ChatBackground          $background,
        /**
         * Identifier of a custom emoji to be shown on the reply header and link preview background for messages sent by the chat; 0 if none.
         */
        protected int                      $backgroundCustomEmojiId,
        /**
         * Block list to which the chat is added; may be null if none.
         */
        protected ?BlockList               $blockList,
        /**
         * Information about bar for managing a business bot in the chat; may be null if none.
         */
        protected ?BusinessBotManageBar    $businessBotManageBar,
        /**
         * True, if the chat messages can be deleted for all users.
         */
        protected bool                     $canBeDeletedForAllUsers,
        /**
         * True, if the chat messages can be deleted only for the current user while other users will continue to see the messages.
         */
        protected bool                     $canBeDeletedOnlyForSelf,
        /**
         * True, if the chat can be reported to Telegram moderators through reportChat or reportChatPhoto.
         */
        protected bool                     $canBeReported,
        /**
         * Chat lists to which the chat belongs. A chat can have a non-zero position in a chat list even if it doesn't belong to the chat list and have no position in a chat list even if it belongs to the chat list.
         *
         * @var ChatList[]
         */
        protected array                    $chatLists,
        /**
         * Application-specific data associated with the chat. (For example, the chat scroll position or local chat notification settings can be stored here.) Persistent if the message database is used.
         */
        protected string                   $clientData,
        /**
         * Default value of the disable_notification parameter, used when a message is sent to the chat.
         */
        protected bool                     $defaultDisableNotification,
        /**
         * A draft of a message in the chat; may be null if none.
         */
        protected ?DraftMessage            $draftMessage,
        /**
         * Emoji status to be shown along with chat title; may be null.
         */
        protected ?EmojiStatus             $emojiStatus,
        /**
         * True, if chat content can't be saved locally, forwarded, or copied.
         */
        protected bool                     $hasProtectedContent,
        /**
         * True, if the chat has scheduled messages.
         */
        protected bool                     $hasScheduledMessages,
        /**
         * Chat unique identifier.
         */
        protected int                      $id,
        /**
         * True, if the chat is marked as unread.
         */
        protected bool                     $isMarkedAsUnread,
        /**
         * True, if translation of all messages in the chat must be suggested to the user.
         */
        protected bool                     $isTranslatable,
        /**
         * Last message in the chat; may be null if none or unknown.
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
         * Current message auto-delete or self-destruct timer setting for the chat, in seconds; 0 if disabled. Self-destruct timer in secret chats starts after the message or its content is viewed. Auto-delete timer in other chats starts from the send date.
         */
        protected int                      $messageAutoDeleteTime,
        /**
         * Identifier of a user or chat that is selected to send messages in the chat; may be null if the user can't change message sender.
         */
        protected ?MessageSender           $messageSenderId,
        /**
         * Notification settings for the chat.
         */
        protected ChatNotificationSettings $notificationSettings,
        /**
         * Information about pending join requests; may be null if none.
         */
        protected ?ChatJoinRequestsInfo    $pendingJoinRequests,
        /**
         * Actions that non-administrator chat members are allowed to take in the chat.
         */
        protected ChatPermissions          $permissions,
        /**
         * Chat photo; may be null.
         */
        protected ?ChatPhotoInfo           $photo,
        /**
         * Positions of the chat in chat lists.
         *
         * @var ChatPosition[]
         */
        protected array                    $positions,
        /**
         * Identifier of the profile accent color for the chat's profile; -1 if none.
         */
        protected int                      $profileAccentColorId,
        /**
         * Identifier of a custom emoji to be shown on the background of the chat's profile; 0 if none.
         */
        protected int                      $profileBackgroundCustomEmojiId,
        /**
         * Identifier of the message from which reply markup needs to be used; 0 if there is no default custom reply markup in the chat.
         */
        protected int                      $replyMarkupMessageId,
        /**
         * Theme set for the chat; may be null if none.
         */
        protected ?ChatTheme               $theme,
        /**
         * Chat title.
         */
        protected string                   $title,
        /**
         * Type of the chat.
         */
        protected ChatType                 $type,
        /**
         * Number of unread messages in the chat.
         */
        protected int                      $unreadCount,
        /**
         * Number of unread messages with a mention/reply in the chat.
         */
        protected int                      $unreadMentionCount,
        /**
         * Number of messages with unread reactions in the chat.
         */
        protected int                      $unreadReactionCount,
        /**
         * Color scheme based on an upgraded gift to be used for the chat instead of accent_color_id and background_custom_emoji_id; may be null if none.
         */
        protected ?UpgradedGiftColors      $upgradedGiftColors,
        /**
         * Information about video chat of the chat.
         */
        protected VideoChat                $videoChat,
        /**
         * True, if the chat is a forum supergroup that must be shown in the "View as topics" mode, or Saved Messages chat that must be shown in the "View as chats".
         */
        protected bool                     $viewAsTopics,
    ) {}

    public static function fromArray(array $array): Chat
    {
        return new static(
            accentColorId                 : $array['accent_color_id'],
            actionBar                     : (isset($array['action_bar']) ? TdSchemaRegistry::fromArray($array['action_bar']) : null),
            availableReactions            : TdSchemaRegistry::fromArray($array['available_reactions']),
            background                    : (isset($array['background']) ? TdSchemaRegistry::fromArray($array['background']) : null),
            backgroundCustomEmojiId       : $array['background_custom_emoji_id'],
            blockList                     : (isset($array['block_list']) ? TdSchemaRegistry::fromArray($array['block_list']) : null),
            businessBotManageBar          : (isset($array['business_bot_manage_bar']) ? TdSchemaRegistry::fromArray($array['business_bot_manage_bar']) : null),
            canBeDeletedForAllUsers       : $array['can_be_deleted_for_all_users'],
            canBeDeletedOnlyForSelf       : $array['can_be_deleted_only_for_self'],
            canBeReported                 : $array['can_be_reported'],
            chatLists                     : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['chat_lists']),
            clientData                    : $array['client_data'],
            defaultDisableNotification    : $array['default_disable_notification'],
            draftMessage                  : (isset($array['draft_message']) ? TdSchemaRegistry::fromArray($array['draft_message']) : null),
            emojiStatus                   : (isset($array['emoji_status']) ? TdSchemaRegistry::fromArray($array['emoji_status']) : null),
            hasProtectedContent           : $array['has_protected_content'],
            hasScheduledMessages          : $array['has_scheduled_messages'],
            id                            : $array['id'],
            isMarkedAsUnread              : $array['is_marked_as_unread'],
            isTranslatable                : $array['is_translatable'],
            lastMessage                   : (isset($array['last_message']) ? TdSchemaRegistry::fromArray($array['last_message']) : null),
            lastReadInboxMessageId        : $array['last_read_inbox_message_id'],
            lastReadOutboxMessageId       : $array['last_read_outbox_message_id'],
            messageAutoDeleteTime         : $array['message_auto_delete_time'],
            messageSenderId               : (isset($array['message_sender_id']) ? TdSchemaRegistry::fromArray($array['message_sender_id']) : null),
            notificationSettings          : TdSchemaRegistry::fromArray($array['notification_settings']),
            pendingJoinRequests           : (isset($array['pending_join_requests']) ? TdSchemaRegistry::fromArray($array['pending_join_requests']) : null),
            permissions                   : TdSchemaRegistry::fromArray($array['permissions']),
            photo                         : (isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null),
            positions                     : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['positions']),
            profileAccentColorId          : $array['profile_accent_color_id'],
            profileBackgroundCustomEmojiId: $array['profile_background_custom_emoji_id'],
            replyMarkupMessageId          : $array['reply_markup_message_id'],
            theme                         : (isset($array['theme']) ? TdSchemaRegistry::fromArray($array['theme']) : null),
            title                         : $array['title'],
            type                          : TdSchemaRegistry::fromArray($array['type']),
            unreadCount                   : $array['unread_count'],
            unreadMentionCount            : $array['unread_mention_count'],
            unreadReactionCount           : $array['unread_reaction_count'],
            upgradedGiftColors            : (isset($array['upgraded_gift_colors']) ? TdSchemaRegistry::fromArray($array['upgraded_gift_colors']) : null),
            videoChat                     : TdSchemaRegistry::fromArray($array['video_chat']),
            viewAsTopics                  : $array['view_as_topics'],
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

    public function getTheme(): ?ChatTheme
    {
        return $this->theme;
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

    public function getUpgradedGiftColors(): ?UpgradedGiftColors
    {
        return $this->upgradedGiftColors;
    }

    public function getVideoChat(): VideoChat
    {
        return $this->videoChat;
    }

    public function getViewAsTopics(): bool
    {
        return $this->viewAsTopics;
    }

    public function setAccentColorId(int $value): static
    {
        $this->accentColorId = $value;

        return $this;
    }

    public function setActionBar(?ChatActionBar $value): static
    {
        $this->actionBar = $value;

        return $this;
    }

    public function setAvailableReactions(ChatAvailableReactions $value): static
    {
        $this->availableReactions = $value;

        return $this;
    }

    public function setBackground(?ChatBackground $value): static
    {
        $this->background = $value;

        return $this;
    }

    public function setBackgroundCustomEmojiId(int $value): static
    {
        $this->backgroundCustomEmojiId = $value;

        return $this;
    }

    public function setBlockList(?BlockList $value): static
    {
        $this->blockList = $value;

        return $this;
    }

    public function setBusinessBotManageBar(?BusinessBotManageBar $value): static
    {
        $this->businessBotManageBar = $value;

        return $this;
    }

    public function setCanBeDeletedForAllUsers(bool $value): static
    {
        $this->canBeDeletedForAllUsers = $value;

        return $this;
    }

    public function setCanBeDeletedOnlyForSelf(bool $value): static
    {
        $this->canBeDeletedOnlyForSelf = $value;

        return $this;
    }

    public function setCanBeReported(bool $value): static
    {
        $this->canBeReported = $value;

        return $this;
    }

    public function setChatLists(array $value): static
    {
        $this->chatLists = $value;

        return $this;
    }

    public function setClientData(string $value): static
    {
        $this->clientData = $value;

        return $this;
    }

    public function setDefaultDisableNotification(bool $value): static
    {
        $this->defaultDisableNotification = $value;

        return $this;
    }

    public function setDraftMessage(?DraftMessage $value): static
    {
        $this->draftMessage = $value;

        return $this;
    }

    public function setEmojiStatus(?EmojiStatus $value): static
    {
        $this->emojiStatus = $value;

        return $this;
    }

    public function setHasProtectedContent(bool $value): static
    {
        $this->hasProtectedContent = $value;

        return $this;
    }

    public function setHasScheduledMessages(bool $value): static
    {
        $this->hasScheduledMessages = $value;

        return $this;
    }

    public function setId(int $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setIsMarkedAsUnread(bool $value): static
    {
        $this->isMarkedAsUnread = $value;

        return $this;
    }

    public function setIsTranslatable(bool $value): static
    {
        $this->isTranslatable = $value;

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

    public function setMessageAutoDeleteTime(int $value): static
    {
        $this->messageAutoDeleteTime = $value;

        return $this;
    }

    public function setMessageSenderId(?MessageSender $value): static
    {
        $this->messageSenderId = $value;

        return $this;
    }

    public function setNotificationSettings(ChatNotificationSettings $value): static
    {
        $this->notificationSettings = $value;

        return $this;
    }

    public function setPendingJoinRequests(?ChatJoinRequestsInfo $value): static
    {
        $this->pendingJoinRequests = $value;

        return $this;
    }

    public function setPermissions(ChatPermissions $value): static
    {
        $this->permissions = $value;

        return $this;
    }

    public function setPhoto(?ChatPhotoInfo $value): static
    {
        $this->photo = $value;

        return $this;
    }

    public function setPositions(array $value): static
    {
        $this->positions = $value;

        return $this;
    }

    public function setProfileAccentColorId(int $value): static
    {
        $this->profileAccentColorId = $value;

        return $this;
    }

    public function setProfileBackgroundCustomEmojiId(int $value): static
    {
        $this->profileBackgroundCustomEmojiId = $value;

        return $this;
    }

    public function setReplyMarkupMessageId(int $value): static
    {
        $this->replyMarkupMessageId = $value;

        return $this;
    }

    public function setTheme(?ChatTheme $value): static
    {
        $this->theme = $value;

        return $this;
    }

    public function setTitle(string $value): static
    {
        $this->title = $value;

        return $this;
    }

    public function setType(ChatType $value): static
    {
        $this->type = $value;

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

    public function setUpgradedGiftColors(?UpgradedGiftColors $value): static
    {
        $this->upgradedGiftColors = $value;

        return $this;
    }

    public function setVideoChat(VideoChat $value): static
    {
        $this->videoChat = $value;

        return $this;
    }

    public function setViewAsTopics(bool $value): static
    {
        $this->viewAsTopics = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                              => static::TYPE_NAME,
            'accent_color_id'                    => $this->accentColorId,
            'action_bar'                         => (null !== $this->actionBar ? $this->actionBar->jsonSerialize() : null),
            'available_reactions'                => $this->availableReactions->jsonSerialize(),
            'background'                         => (null !== $this->background ? $this->background->jsonSerialize() : null),
            'background_custom_emoji_id'         => $this->backgroundCustomEmojiId,
            'block_list'                         => (null !== $this->blockList ? $this->blockList->jsonSerialize() : null),
            'business_bot_manage_bar'            => (null !== $this->businessBotManageBar ? $this->businessBotManageBar->jsonSerialize() : null),
            'can_be_deleted_for_all_users'       => $this->canBeDeletedForAllUsers,
            'can_be_deleted_only_for_self'       => $this->canBeDeletedOnlyForSelf,
            'can_be_reported'                    => $this->canBeReported,
            'chat_lists'                         => array_map(static fn($x) => $x->jsonSerialize(), $this->chatLists),
            'client_data'                        => $this->clientData,
            'default_disable_notification'       => $this->defaultDisableNotification,
            'draft_message'                      => (null !== $this->draftMessage ? $this->draftMessage->jsonSerialize() : null),
            'emoji_status'                       => (null !== $this->emojiStatus ? $this->emojiStatus->jsonSerialize() : null),
            'has_protected_content'              => $this->hasProtectedContent,
            'has_scheduled_messages'             => $this->hasScheduledMessages,
            'id'                                 => $this->id,
            'is_marked_as_unread'                => $this->isMarkedAsUnread,
            'is_translatable'                    => $this->isTranslatable,
            'last_message'                       => (null !== $this->lastMessage ? $this->lastMessage->jsonSerialize() : null),
            'last_read_inbox_message_id'         => $this->lastReadInboxMessageId,
            'last_read_outbox_message_id'        => $this->lastReadOutboxMessageId,
            'message_auto_delete_time'           => $this->messageAutoDeleteTime,
            'message_sender_id'                  => (null !== $this->messageSenderId ? $this->messageSenderId->jsonSerialize() : null),
            'notification_settings'              => $this->notificationSettings->jsonSerialize(),
            'pending_join_requests'              => (null !== $this->pendingJoinRequests ? $this->pendingJoinRequests->jsonSerialize() : null),
            'permissions'                        => $this->permissions->jsonSerialize(),
            'photo'                              => (null !== $this->photo ? $this->photo->jsonSerialize() : null),
            'positions'                          => array_map(static fn($x) => $x->jsonSerialize(), $this->positions),
            'profile_accent_color_id'            => $this->profileAccentColorId,
            'profile_background_custom_emoji_id' => $this->profileBackgroundCustomEmojiId,
            'reply_markup_message_id'            => $this->replyMarkupMessageId,
            'theme'                              => (null !== $this->theme ? $this->theme->jsonSerialize() : null),
            'title'                              => $this->title,
            'type'                               => $this->type->jsonSerialize(),
            'unread_count'                       => $this->unreadCount,
            'unread_mention_count'               => $this->unreadMentionCount,
            'unread_reaction_count'              => $this->unreadReactionCount,
            'upgraded_gift_colors'               => (null !== $this->upgradedGiftColors ? $this->upgradedGiftColors->jsonSerialize() : null),
            'video_chat'                         => $this->videoChat->jsonSerialize(),
            'view_as_topics'                     => $this->viewAsTopics,
        ];
    }
}

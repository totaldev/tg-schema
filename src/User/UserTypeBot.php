<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\User;

/**
 * A bot (see https://core.telegram.org/bots).
 */
class UserTypeBot extends UserType
{
    public const string TYPE_NAME = 'userTypeBot';

    public function __construct(
        /**
         * The number of recently active users of the bot.
         */
        protected int    $activeUserCount,
        /**
         * True, if users can create and delete topics in the chat with the bot.
         */
        protected bool   $allowsUsersToCreateTopics,
        /**
         * True, if the bot can be added to attachment or side menu.
         */
        protected bool   $canBeAddedToAttachmentMenu,
        /**
         * True, if the bot is owned by the current user and can be edited using the methods toggleBotUsernameIsActive, reorderBotActiveUsernames, setBotProfilePhoto, setBotName, setBotInfoDescription, and setBotInfoShortDescription.
         */
        protected bool   $canBeEdited,
        /**
         * True, if the bot supports connection to Telegram Business accounts.
         */
        protected bool   $canConnectToBusiness,
        /**
         * True, if the bot can be invited to basic group and supergroup chats.
         */
        protected bool   $canJoinGroups,
        /**
         * True, if the bot can manage other bots.
         */
        protected bool   $canManageBots,
        /**
         * True, if the bot can read all messages in basic group or supergroup chats and not just those addressed to the bot. In private and channel chats a bot can always read all messages.
         */
        protected bool   $canReadAllGroupMessages,
        /**
         * True, if the bot has the main Web App.
         */
        protected bool   $hasMainWebApp,
        /**
         * True, if the bot has topics.
         */
        protected bool   $hasTopics,
        /**
         * Placeholder for inline queries (displayed on the application input field).
         */
        protected string $inlineQueryPlaceholder,
        /**
         * True, if the bot supports inline queries.
         */
        protected bool   $isInline,
        /**
         * True, if the location of the user is expected to be sent with every inline query to this bot.
         */
        protected bool   $needLocation,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UserTypeBot
    {
        return new static(
            activeUserCount           : $array['active_user_count'],
            allowsUsersToCreateTopics : $array['allows_users_to_create_topics'],
            canBeAddedToAttachmentMenu: $array['can_be_added_to_attachment_menu'],
            canBeEdited               : $array['can_be_edited'],
            canConnectToBusiness      : $array['can_connect_to_business'],
            canJoinGroups             : $array['can_join_groups'],
            canManageBots             : $array['can_manage_bots'],
            canReadAllGroupMessages   : $array['can_read_all_group_messages'],
            hasMainWebApp             : $array['has_main_web_app'],
            hasTopics                 : $array['has_topics'],
            inlineQueryPlaceholder    : $array['inline_query_placeholder'],
            isInline                  : $array['is_inline'],
            needLocation              : $array['need_location'],
        );
    }

    public function getActiveUserCount(): int
    {
        return $this->activeUserCount;
    }

    public function getAllowsUsersToCreateTopics(): bool
    {
        return $this->allowsUsersToCreateTopics;
    }

    public function getCanBeAddedToAttachmentMenu(): bool
    {
        return $this->canBeAddedToAttachmentMenu;
    }

    public function getCanBeEdited(): bool
    {
        return $this->canBeEdited;
    }

    public function getCanConnectToBusiness(): bool
    {
        return $this->canConnectToBusiness;
    }

    public function getCanJoinGroups(): bool
    {
        return $this->canJoinGroups;
    }

    public function getCanManageBots(): bool
    {
        return $this->canManageBots;
    }

    public function getCanReadAllGroupMessages(): bool
    {
        return $this->canReadAllGroupMessages;
    }

    public function getHasMainWebApp(): bool
    {
        return $this->hasMainWebApp;
    }

    public function getHasTopics(): bool
    {
        return $this->hasTopics;
    }

    public function getInlineQueryPlaceholder(): string
    {
        return $this->inlineQueryPlaceholder;
    }

    public function getIsInline(): bool
    {
        return $this->isInline;
    }

    public function getNeedLocation(): bool
    {
        return $this->needLocation;
    }

    public function setActiveUserCount(int $value): static
    {
        $this->activeUserCount = $value;

        return $this;
    }

    public function setAllowsUsersToCreateTopics(bool $value): static
    {
        $this->allowsUsersToCreateTopics = $value;

        return $this;
    }

    public function setCanBeAddedToAttachmentMenu(bool $value): static
    {
        $this->canBeAddedToAttachmentMenu = $value;

        return $this;
    }

    public function setCanBeEdited(bool $value): static
    {
        $this->canBeEdited = $value;

        return $this;
    }

    public function setCanConnectToBusiness(bool $value): static
    {
        $this->canConnectToBusiness = $value;

        return $this;
    }

    public function setCanJoinGroups(bool $value): static
    {
        $this->canJoinGroups = $value;

        return $this;
    }

    public function setCanManageBots(bool $value): static
    {
        $this->canManageBots = $value;

        return $this;
    }

    public function setCanReadAllGroupMessages(bool $value): static
    {
        $this->canReadAllGroupMessages = $value;

        return $this;
    }

    public function setHasMainWebApp(bool $value): static
    {
        $this->hasMainWebApp = $value;

        return $this;
    }

    public function setHasTopics(bool $value): static
    {
        $this->hasTopics = $value;

        return $this;
    }

    public function setInlineQueryPlaceholder(string $value): static
    {
        $this->inlineQueryPlaceholder = $value;

        return $this;
    }

    public function setIsInline(bool $value): static
    {
        $this->isInline = $value;

        return $this;
    }

    public function setNeedLocation(bool $value): static
    {
        $this->needLocation = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                           => static::TYPE_NAME,
            'active_user_count'               => $this->activeUserCount,
            'allows_users_to_create_topics'   => $this->allowsUsersToCreateTopics,
            'can_be_added_to_attachment_menu' => $this->canBeAddedToAttachmentMenu,
            'can_be_edited'                   => $this->canBeEdited,
            'can_connect_to_business'         => $this->canConnectToBusiness,
            'can_join_groups'                 => $this->canJoinGroups,
            'can_manage_bots'                 => $this->canManageBots,
            'can_read_all_group_messages'     => $this->canReadAllGroupMessages,
            'has_main_web_app'                => $this->hasMainWebApp,
            'has_topics'                      => $this->hasTopics,
            'inline_query_placeholder'        => $this->inlineQueryPlaceholder,
            'is_inline'                       => $this->isInline,
            'need_location'                   => $this->needLocation,
        ];
    }
}

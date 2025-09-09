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
    public const TYPE_NAME = 'userTypeBot';

    public function __construct(
        /**
         * True, if the bot is owned by the current user and can be edited using the methods toggleBotUsernameIsActive, reorderBotActiveUsernames, setBotProfilePhoto, setBotName, setBotInfoDescription, and setBotInfoShortDescription.
         */
        protected bool   $canBeEdited,
        /**
         * True, if the bot can be invited to basic group and supergroup chats.
         */
        protected bool   $canJoinGroups,
        /**
         * True, if the bot can read all messages in basic group or supergroup chats and not just those addressed to the bot. In private and channel chats a bot can always read all messages.
         */
        protected bool   $canReadAllGroupMessages,
        /**
         * True, if the bot has the main Web App.
         */
        protected bool   $hasMainWebApp,
        /**
         * True, if the bot supports inline queries.
         */
        protected bool   $isInline,
        /**
         * Placeholder for inline queries (displayed on the application input field).
         */
        protected string $inlineQueryPlaceholder,
        /**
         * True, if the location of the user is expected to be sent with every inline query to this bot.
         */
        protected bool   $needLocation,
        /**
         * True, if the bot supports connection to Telegram Business accounts.
         */
        protected bool   $canConnectToBusiness,
        /**
         * True, if the bot can be added to attachment or side menu.
         */
        protected bool   $canBeAddedToAttachmentMenu,
        /**
         * The number of recently active users of the bot.
         */
        protected int    $activeUserCount,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UserTypeBot
    {
        return new static(
            $array['can_be_edited'],
            $array['can_join_groups'],
            $array['can_read_all_group_messages'],
            $array['has_main_web_app'],
            $array['is_inline'],
            $array['inline_query_placeholder'],
            $array['need_location'],
            $array['can_connect_to_business'],
            $array['can_be_added_to_attachment_menu'],
            $array['active_user_count'],
        );
    }

    public function getActiveUserCount(): int
    {
        return $this->activeUserCount;
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

    public function getCanReadAllGroupMessages(): bool
    {
        return $this->canReadAllGroupMessages;
    }

    public function getHasMainWebApp(): bool
    {
        return $this->hasMainWebApp;
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

    public function typeSerialize(): array
    {
        return [
            '@type'                           => static::TYPE_NAME,
            'can_be_edited'                   => $this->canBeEdited,
            'can_join_groups'                 => $this->canJoinGroups,
            'can_read_all_group_messages'     => $this->canReadAllGroupMessages,
            'has_main_web_app'                => $this->hasMainWebApp,
            'is_inline'                       => $this->isInline,
            'inline_query_placeholder'        => $this->inlineQueryPlaceholder,
            'need_location'                   => $this->needLocation,
            'can_connect_to_business'         => $this->canConnectToBusiness,
            'can_be_added_to_attachment_menu' => $this->canBeAddedToAttachmentMenu,
            'active_user_count'               => $this->activeUserCount,
        ];
    }
}

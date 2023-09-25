<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\User;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A bot (see https://core.telegram.org/bots)
 */
class UserTypeBot extends UserType
{
    public const TYPE_NAME = 'userTypeBot';

    /**
     * True, if the bot is owned by the current user and can be edited using the methods toggleBotUsernameIsActive, reorderBotActiveUsernames, setBotProfilePhoto, setBotName, setBotInfoDescription, and setBotInfoShortDescription
     *
     * @var bool
     */
    protected bool $canBeEdited;

    /**
     * True, if the bot can be invited to basic group and supergroup chats
     *
     * @var bool
     */
    protected bool $canJoinGroups;

    /**
     * True, if the bot can read all messages in basic group or supergroup chats and not just those addressed to the bot. In private and channel chats a bot can always read all messages
     *
     * @var bool
     */
    protected bool $canReadAllGroupMessages;

    /**
     * True, if the bot supports inline queries
     *
     * @var bool
     */
    protected bool $isInline;

    /**
     * Placeholder for inline queries (displayed on the application input field)
     *
     * @var string
     */
    protected string $inlineQueryPlaceholder;

    /**
     * True, if the location of the user is expected to be sent with every inline query to this bot
     *
     * @var bool
     */
    protected bool $needLocation;

    /**
     * True, if the bot can be added to attachment or side menu
     *
     * @var bool
     */
    protected bool $canBeAddedToAttachmentMenu;

    public function __construct(
        bool $canBeEdited,
        bool $canJoinGroups,
        bool $canReadAllGroupMessages,
        bool $isInline,
        string $inlineQueryPlaceholder,
        bool $needLocation,
        bool $canBeAddedToAttachmentMenu,
    ) {
        parent::__construct();

        $this->canBeEdited = $canBeEdited;
        $this->canJoinGroups = $canJoinGroups;
        $this->canReadAllGroupMessages = $canReadAllGroupMessages;
        $this->isInline = $isInline;
        $this->inlineQueryPlaceholder = $inlineQueryPlaceholder;
        $this->needLocation = $needLocation;
        $this->canBeAddedToAttachmentMenu = $canBeAddedToAttachmentMenu;
    }

    public static function fromArray(array $array): UserTypeBot
    {
        return new static(
            $array['can_be_edited'],
            $array['can_join_groups'],
            $array['can_read_all_group_messages'],
            $array['is_inline'],
            $array['inline_query_placeholder'],
            $array['need_location'],
            $array['can_be_added_to_attachment_menu'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'can_be_edited' => $this->canBeEdited,
            'can_join_groups' => $this->canJoinGroups,
            'can_read_all_group_messages' => $this->canReadAllGroupMessages,
            'is_inline' => $this->isInline,
            'inline_query_placeholder' => $this->inlineQueryPlaceholder,
            'need_location' => $this->needLocation,
            'can_be_added_to_attachment_menu' => $this->canBeAddedToAttachmentMenu,
        ];
    }

    public function getCanBeEdited(): bool
    {
        return $this->canBeEdited;
    }

    public function getCanJoinGroups(): bool
    {
        return $this->canJoinGroups;
    }

    public function getCanReadAllGroupMessages(): bool
    {
        return $this->canReadAllGroupMessages;
    }

    public function getIsInline(): bool
    {
        return $this->isInline;
    }

    public function getInlineQueryPlaceholder(): string
    {
        return $this->inlineQueryPlaceholder;
    }

    public function getNeedLocation(): bool
    {
        return $this->needLocation;
    }

    public function getCanBeAddedToAttachmentMenu(): bool
    {
        return $this->canBeAddedToAttachmentMenu;
    }
}

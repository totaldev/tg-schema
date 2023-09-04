<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Basic;

use Totaldev\TgSchema\Bot\BotCommands;
use Totaldev\TgSchema\Chat\ChatInviteLink;
use Totaldev\TgSchema\Chat\ChatMember;
use Totaldev\TgSchema\Chat\ChatPhoto;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains full information about a basic group
 */
class BasicGroupFullInfo extends TdObject
{
    public const TYPE_NAME = 'basicGroupFullInfo';

    /**
     * Chat photo; may be null if empty or unknown. If non-null, then it is the same photo as in chat.photo
     *
     * @var ChatPhoto|null
     */
    protected ?ChatPhoto $photo;

    /**
     * Group description. Updated only after the basic group is opened
     *
     * @var string
     */
    protected string $description;

    /**
     * User identifier of the creator of the group; 0 if unknown
     *
     * @var int
     */
    protected int $creatorUserId;

    /**
     * Group members
     *
     * @var ChatMember[]
     */
    protected array $members;

    /**
     * True, if non-administrators and non-bots can be hidden in responses to getSupergroupMembers and searchChatMembers for non-administrators after upgrading the basic group to a supergroup
     *
     * @var bool
     */
    protected bool $canHideMembers;

    /**
     * True, if aggressive anti-spam checks can be enabled or disabled in the supergroup after upgrading the basic group to a supergroup
     *
     * @var bool
     */
    protected bool $canToggleAggressiveAntiSpam;

    /**
     * Primary invite link for this group; may be null. For chat administrators with can_invite_users right only. Updated only after the basic group is opened
     *
     * @var ChatInviteLink|null
     */
    protected ?ChatInviteLink $inviteLink;

    /**
     * List of commands of bots in the group
     *
     * @var BotCommands[]
     */
    protected array $botCommands;

    public function __construct(
        ?ChatPhoto $photo,
        string $description,
        int $creatorUserId,
        array $members,
        bool $canHideMembers,
        bool $canToggleAggressiveAntiSpam,
        ?ChatInviteLink $inviteLink,
        array $botCommands,
    ) {
        $this->photo = $photo;
        $this->description = $description;
        $this->creatorUserId = $creatorUserId;
        $this->members = $members;
        $this->canHideMembers = $canHideMembers;
        $this->canToggleAggressiveAntiSpam = $canToggleAggressiveAntiSpam;
        $this->inviteLink = $inviteLink;
        $this->botCommands = $botCommands;
    }

    public static function fromArray(array $array): BasicGroupFullInfo
    {
        return new static(
            (isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null),
            $array['description'],
            $array['creator_user_id'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['members']),
            $array['can_hide_members'],
            $array['can_toggle_aggressive_anti_spam'],
            (isset($array['invite_link']) ? TdSchemaRegistry::fromArray($array['invite_link']) : null),
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['botCommands']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'photo' => (isset($this->photo) ? $this->photo : null),
            'description' => $this->description,
            'creator_user_id' => $this->creatorUserId,
            array_map(fn($x) => $x->typeSerialize(), $this->members),
            'can_hide_members' => $this->canHideMembers,
            'can_toggle_aggressive_anti_spam' => $this->canToggleAggressiveAntiSpam,
            'invite_link' => (isset($this->inviteLink) ? $this->inviteLink : null),
            array_map(fn($x) => $x->typeSerialize(), $this->botCommands),
        ];
    }

    public function getPhoto(): ?ChatPhoto
    {
        return $this->photo;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getCreatorUserId(): int
    {
        return $this->creatorUserId;
    }

    public function getMembers(): array
    {
        return $this->members;
    }

    public function getCanHideMembers(): bool
    {
        return $this->canHideMembers;
    }

    public function getCanToggleAggressiveAntiSpam(): bool
    {
        return $this->canToggleAggressiveAntiSpam;
    }

    public function getInviteLink(): ?ChatInviteLink
    {
        return $this->inviteLink;
    }

    public function getBotCommands(): array
    {
        return $this->botCommands;
    }
}

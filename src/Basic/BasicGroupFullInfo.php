<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Basic;

use Totaldev\TgSchema\Bot\BotCommands;
use Totaldev\TgSchema\Chat\ChatInviteLink;
use Totaldev\TgSchema\Chat\ChatMember;
use Totaldev\TgSchema\Chat\ChatPhoto;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains full information about a basic group.
 */
class BasicGroupFullInfo extends TdObject
{
    public const string TYPE_NAME = 'basicGroupFullInfo';

    public function __construct(
        /**
         * List of commands of bots in the group.
         *
         * @var BotCommands[]
         */
        protected array           $botCommands,
        /**
         * True, if non-administrators and non-bots can be hidden in responses to getSupergroupMembers and searchChatMembers for non-administrators after upgrading the basic group to a supergroup.
         */
        protected bool            $canHideMembers,
        /**
         * True, if aggressive anti-spam checks can be enabled or disabled in the supergroup after upgrading the basic group to a supergroup.
         */
        protected bool            $canToggleAggressiveAntiSpam,
        /**
         * User identifier of the creator of the group; 0 if unknown.
         */
        protected int             $creatorUserId,
        /**
         * Group description. Updated only after the basic group is opened.
         */
        protected string          $description,
        /**
         * Primary invite link for this group; may be null. For chat administrators with can_invite_users right only. Updated only after the basic group is opened.
         */
        protected ?ChatInviteLink $inviteLink,
        /**
         * Group members.
         *
         * @var ChatMember[]
         */
        protected array           $members,
        /**
         * Chat photo; may be null if empty or unknown. If non-null, then it is the same photo as in chat.photo.
         */
        protected ?ChatPhoto      $photo,
    ) {}

    public static function fromArray(array $array): BasicGroupFullInfo
    {
        return new static(
            botCommands                : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['bot_commands']),
            canHideMembers             : $array['can_hide_members'],
            canToggleAggressiveAntiSpam: $array['can_toggle_aggressive_anti_spam'],
            creatorUserId              : $array['creator_user_id'],
            description                : $array['description'],
            inviteLink                 : (isset($array['invite_link']) ? TdSchemaRegistry::fromArray($array['invite_link']) : null),
            members                    : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['members']),
            photo                      : (isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null),
        );
    }

    public function getBotCommands(): array
    {
        return $this->botCommands;
    }

    public function getCanHideMembers(): bool
    {
        return $this->canHideMembers;
    }

    public function getCanToggleAggressiveAntiSpam(): bool
    {
        return $this->canToggleAggressiveAntiSpam;
    }

    public function getCreatorUserId(): int
    {
        return $this->creatorUserId;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getInviteLink(): ?ChatInviteLink
    {
        return $this->inviteLink;
    }

    public function getMembers(): array
    {
        return $this->members;
    }

    public function getPhoto(): ?ChatPhoto
    {
        return $this->photo;
    }

    public function setBotCommands(array $value): static
    {
        $this->botCommands = $value;

        return $this;
    }

    public function setCanHideMembers(bool $value): static
    {
        $this->canHideMembers = $value;

        return $this;
    }

    public function setCanToggleAggressiveAntiSpam(bool $value): static
    {
        $this->canToggleAggressiveAntiSpam = $value;

        return $this;
    }

    public function setCreatorUserId(int $value): static
    {
        $this->creatorUserId = $value;

        return $this;
    }

    public function setDescription(string $value): static
    {
        $this->description = $value;

        return $this;
    }

    public function setInviteLink(?ChatInviteLink $value): static
    {
        $this->inviteLink = $value;

        return $this;
    }

    public function setMembers(array $value): static
    {
        $this->members = $value;

        return $this;
    }

    public function setPhoto(?ChatPhoto $value): static
    {
        $this->photo = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                           => static::TYPE_NAME,
            'bot_commands'                    => array_map(static fn($x) => $x->jsonSerialize(), $this->botCommands),
            'can_hide_members'                => $this->canHideMembers,
            'can_toggle_aggressive_anti_spam' => $this->canToggleAggressiveAntiSpam,
            'creator_user_id'                 => $this->creatorUserId,
            'description'                     => $this->description,
            'invite_link'                     => (null !== $this->inviteLink ? $this->inviteLink->jsonSerialize() : null),
            'members'                         => array_map(static fn($x) => $x->jsonSerialize(), $this->members),
            'photo'                           => (null !== $this->photo ? $this->photo->jsonSerialize() : null),
        ];
    }
}

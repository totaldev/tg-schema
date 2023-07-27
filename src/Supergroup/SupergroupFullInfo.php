<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Supergroup;

use Totaldev\TgSchema\TdObject;

/**
 * Contains full information about a supergroup or channel
 */
class SupergroupFullInfo extends TdObject
{
    public const TYPE_NAME = 'supergroupFullInfo';

    /**
     * Chat photo; may be null if empty or unknown. If non-null, then it is the same photo as in chat.photo
     *
     * @var ChatPhoto|null
     */
    protected ?ChatPhoto $photo;

    /**
     * Supergroup or channel description
     *
     * @var string
     */
    protected string $description;

    /**
     * Number of members in the supergroup or channel; 0 if unknown
     *
     * @var int
     */
    protected int $memberCount;

    /**
     * Number of privileged users in the supergroup or channel; 0 if unknown
     *
     * @var int
     */
    protected int $administratorCount;

    /**
     * Number of restricted users in the supergroup; 0 if unknown
     *
     * @var int
     */
    protected int $restrictedCount;

    /**
     * Number of users banned from chat; 0 if unknown
     *
     * @var int
     */
    protected int $bannedCount;

    /**
     * Chat identifier of a discussion group for the channel, or a channel, for which the supergroup is the designated discussion group; 0 if none or unknown
     *
     * @var int
     */
    protected int $linkedChatId;

    /**
     * Delay between consecutive sent messages for non-administrator supergroup members, in seconds
     *
     * @var int
     */
    protected int $slowModeDelay;

    /**
     * Time left before next message can be sent in the supergroup, in seconds. An updateSupergroupFullInfo update is not triggered when value of this field changes, but both new and old values are non-zero
     *
     * @var float
     */
    protected float $slowModeDelayExpiresIn;

    /**
     * True, if members of the chat can be retrieved via getSupergroupMembers or searchChatMembers
     *
     * @var bool
     */
    protected bool $canGetMembers;

    /**
     * True, if non-administrators can receive only administrators and bots using getSupergroupMembers or searchChatMembers
     *
     * @var bool
     */
    protected bool $hasHiddenMembers;

    /**
     * True, if non-administrators and non-bots can be hidden in responses to getSupergroupMembers and searchChatMembers for non-administrators
     *
     * @var bool
     */
    protected bool $canHideMembers;

    /**
     * True, if the supergroup sticker set can be changed
     *
     * @var bool
     */
    protected bool $canSetStickerSet;

    /**
     * True, if the supergroup location can be changed
     *
     * @var bool
     */
    protected bool $canSetLocation;

    /**
     * True, if the supergroup or channel statistics are available
     *
     * @var bool
     */
    protected bool $canGetStatistics;

    /**
     * True, if aggressive anti-spam checks can be enabled or disabled in the supergroup
     *
     * @var bool
     */
    protected bool $canToggleAggressiveAntiSpam;

    /**
     * True, if new chat members will have access to old messages. In public, discussion, of forum groups and all channels, old messages are always available, so this option affects only private non-forum supergroups without a linked chat. The value of this field is only available to chat administrators
     *
     * @var bool
     */
    protected bool $isAllHistoryAvailable;

    /**
     * True, if aggressive anti-spam checks are enabled in the supergroup. The value of this field is only available to chat administrators
     *
     * @var bool
     */
    protected bool $hasAggressiveAntiSpamEnabled;

    /**
     * Identifier of the supergroup sticker set; 0 if none
     *
     * @var int
     */
    protected int $stickerSetId;

    /**
     * Location to which the supergroup is connected; may be null
     *
     * @var ChatLocation|null
     */
    protected ?ChatLocation $location;

    /**
     * Primary invite link for the chat; may be null. For chat administrators with can_invite_users right only
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

    /**
     * Identifier of the basic group from which supergroup was upgraded; 0 if none
     *
     * @var int
     */
    protected int $upgradedFromBasicGroupId;

    /**
     * Identifier of the last message in the basic group from which supergroup was upgraded; 0 if none
     *
     * @var int
     */
    protected int $upgradedFromMaxMessageId;

    public function __construct(
        ?ChatPhoto $photo,
        string $description,
        int $memberCount,
        int $administratorCount,
        int $restrictedCount,
        int $bannedCount,
        int $linkedChatId,
        int $slowModeDelay,
        float $slowModeDelayExpiresIn,
        bool $canGetMembers,
        bool $hasHiddenMembers,
        bool $canHideMembers,
        bool $canSetStickerSet,
        bool $canSetLocation,
        bool $canGetStatistics,
        bool $canToggleAggressiveAntiSpam,
        bool $isAllHistoryAvailable,
        bool $hasAggressiveAntiSpamEnabled,
        int $stickerSetId,
        ?ChatLocation $location,
        ?ChatInviteLink $inviteLink,
        array $botCommands,
        int $upgradedFromBasicGroupId,
        int $upgradedFromMaxMessageId,
    ) {
        $this->photo = $photo;
        $this->description = $description;
        $this->memberCount = $memberCount;
        $this->administratorCount = $administratorCount;
        $this->restrictedCount = $restrictedCount;
        $this->bannedCount = $bannedCount;
        $this->linkedChatId = $linkedChatId;
        $this->slowModeDelay = $slowModeDelay;
        $this->slowModeDelayExpiresIn = $slowModeDelayExpiresIn;
        $this->canGetMembers = $canGetMembers;
        $this->hasHiddenMembers = $hasHiddenMembers;
        $this->canHideMembers = $canHideMembers;
        $this->canSetStickerSet = $canSetStickerSet;
        $this->canSetLocation = $canSetLocation;
        $this->canGetStatistics = $canGetStatistics;
        $this->canToggleAggressiveAntiSpam = $canToggleAggressiveAntiSpam;
        $this->isAllHistoryAvailable = $isAllHistoryAvailable;
        $this->hasAggressiveAntiSpamEnabled = $hasAggressiveAntiSpamEnabled;
        $this->stickerSetId = $stickerSetId;
        $this->location = $location;
        $this->inviteLink = $inviteLink;
        $this->botCommands = $botCommands;
        $this->upgradedFromBasicGroupId = $upgradedFromBasicGroupId;
        $this->upgradedFromMaxMessageId = $upgradedFromMaxMessageId;
    }

    public static function fromArray(array $array): SupergroupFullInfo
    {
        return new static(
            (isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null),
            $array['description'],
            $array['member_count'],
            $array['administrator_count'],
            $array['restricted_count'],
            $array['banned_count'],
            $array['linked_chat_id'],
            $array['slow_mode_delay'],
            $array['slow_mode_delay_expires_in'],
            $array['can_get_members'],
            $array['has_hidden_members'],
            $array['can_hide_members'],
            $array['can_set_sticker_set'],
            $array['can_set_location'],
            $array['can_get_statistics'],
            $array['can_toggle_aggressive_anti_spam'],
            $array['is_all_history_available'],
            $array['has_aggressive_anti_spam_enabled'],
            $array['sticker_set_id'],
            (isset($array['location']) ? TdSchemaRegistry::fromArray($array['location']) : null),
            (isset($array['invite_link']) ? TdSchemaRegistry::fromArray($array['invite_link']) : null),
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['botCommands']),
            $array['upgraded_from_basic_group_id'],
            $array['upgraded_from_max_message_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'photo' => (isset($this->photo) ? $this->photo : null),
            'description' => $this->description,
            'member_count' => $this->memberCount,
            'administrator_count' => $this->administratorCount,
            'restricted_count' => $this->restrictedCount,
            'banned_count' => $this->bannedCount,
            'linked_chat_id' => $this->linkedChatId,
            'slow_mode_delay' => $this->slowModeDelay,
            'slow_mode_delay_expires_in' => $this->slowModeDelayExpiresIn,
            'can_get_members' => $this->canGetMembers,
            'has_hidden_members' => $this->hasHiddenMembers,
            'can_hide_members' => $this->canHideMembers,
            'can_set_sticker_set' => $this->canSetStickerSet,
            'can_set_location' => $this->canSetLocation,
            'can_get_statistics' => $this->canGetStatistics,
            'can_toggle_aggressive_anti_spam' => $this->canToggleAggressiveAntiSpam,
            'is_all_history_available' => $this->isAllHistoryAvailable,
            'has_aggressive_anti_spam_enabled' => $this->hasAggressiveAntiSpamEnabled,
            'sticker_set_id' => $this->stickerSetId,
            'location' => (isset($this->location) ? $this->location : null),
            'invite_link' => (isset($this->inviteLink) ? $this->inviteLink : null),
            array_map(fn($x) => $x->typeSerialize(), $this->botCommands),
            'upgraded_from_basic_group_id' => $this->upgradedFromBasicGroupId,
            'upgraded_from_max_message_id' => $this->upgradedFromMaxMessageId,
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

    public function getMemberCount(): int
    {
        return $this->memberCount;
    }

    public function getAdministratorCount(): int
    {
        return $this->administratorCount;
    }

    public function getRestrictedCount(): int
    {
        return $this->restrictedCount;
    }

    public function getBannedCount(): int
    {
        return $this->bannedCount;
    }

    public function getLinkedChatId(): int
    {
        return $this->linkedChatId;
    }

    public function getSlowModeDelay(): int
    {
        return $this->slowModeDelay;
    }

    public function getSlowModeDelayExpiresIn(): float
    {
        return $this->slowModeDelayExpiresIn;
    }

    public function getCanGetMembers(): bool
    {
        return $this->canGetMembers;
    }

    public function getHasHiddenMembers(): bool
    {
        return $this->hasHiddenMembers;
    }

    public function getCanHideMembers(): bool
    {
        return $this->canHideMembers;
    }

    public function getCanSetStickerSet(): bool
    {
        return $this->canSetStickerSet;
    }

    public function getCanSetLocation(): bool
    {
        return $this->canSetLocation;
    }

    public function getCanGetStatistics(): bool
    {
        return $this->canGetStatistics;
    }

    public function getCanToggleAggressiveAntiSpam(): bool
    {
        return $this->canToggleAggressiveAntiSpam;
    }

    public function getIsAllHistoryAvailable(): bool
    {
        return $this->isAllHistoryAvailable;
    }

    public function getHasAggressiveAntiSpamEnabled(): bool
    {
        return $this->hasAggressiveAntiSpamEnabled;
    }

    public function getStickerSetId(): int
    {
        return $this->stickerSetId;
    }

    public function getLocation(): ?ChatLocation
    {
        return $this->location;
    }

    public function getInviteLink(): ?ChatInviteLink
    {
        return $this->inviteLink;
    }

    public function getBotCommands(): array
    {
        return $this->botCommands;
    }

    public function getUpgradedFromBasicGroupId(): int
    {
        return $this->upgradedFromBasicGroupId;
    }

    public function getUpgradedFromMaxMessageId(): int
    {
        return $this->upgradedFromMaxMessageId;
    }
}

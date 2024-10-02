<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Supergroup;

use Totaldev\TgSchema\Bot\BotCommands;
use Totaldev\TgSchema\Chat\ChatInviteLink;
use Totaldev\TgSchema\Chat\ChatLocation;
use Totaldev\TgSchema\Chat\ChatPhoto;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains full information about a supergroup or channel.
 */
class SupergroupFullInfo extends TdObject
{
    public const TYPE_NAME = 'supergroupFullInfo';

    public function __construct(
        /**
         * Chat photo; may be null if empty or unknown. If non-null, then it is the same photo as in chat.photo.
         */
        protected ?ChatPhoto      $photo,
        /**
         * Supergroup or channel description.
         */
        protected string          $description,
        /**
         * Number of members in the supergroup or channel; 0 if unknown.
         */
        protected int             $memberCount,
        /**
         * Number of privileged users in the supergroup or channel; 0 if unknown.
         */
        protected int             $administratorCount,
        /**
         * Number of restricted users in the supergroup; 0 if unknown.
         */
        protected int             $restrictedCount,
        /**
         * Number of users banned from chat; 0 if unknown.
         */
        protected int             $bannedCount,
        /**
         * Chat identifier of a discussion group for the channel, or a channel, for which the supergroup is the designated discussion group; 0 if none or unknown.
         */
        protected int             $linkedChatId,
        /**
         * Delay between consecutive sent messages for non-administrator supergroup members, in seconds.
         */
        protected int             $slowModeDelay,
        /**
         * Time left before next message can be sent in the supergroup, in seconds. An updateSupergroupFullInfo update is not triggered when value of this field changes, but both new and old values are non-zero.
         */
        protected float           $slowModeDelayExpiresIn,
        /**
         * True, if paid reaction can be enabled in the channel chat; for channels only.
         */
        protected bool            $canEnablePaidReaction,
        /**
         * True, if members of the chat can be retrieved via getSupergroupMembers or searchChatMembers.
         */
        protected bool            $canGetMembers,
        /**
         * True, if non-administrators can receive only administrators and bots using getSupergroupMembers or searchChatMembers.
         */
        protected bool            $hasHiddenMembers,
        /**
         * True, if non-administrators and non-bots can be hidden in responses to getSupergroupMembers and searchChatMembers for non-administrators.
         */
        protected bool            $canHideMembers,
        /**
         * True, if the supergroup sticker set can be changed.
         */
        protected bool            $canSetStickerSet,
        /**
         * True, if the supergroup location can be changed.
         */
        protected bool            $canSetLocation,
        /**
         * True, if the supergroup or channel statistics are available.
         */
        protected bool            $canGetStatistics,
        /**
         * True, if the supergroup or channel revenue statistics are available.
         */
        protected bool            $canGetRevenueStatistics,
        /**
         * True, if the supergroup or channel Telegram Star revenue statistics are available.
         */
        protected bool            $canGetStarRevenueStatistics,
        /**
         * True, if aggressive anti-spam checks can be enabled or disabled in the supergroup.
         */
        protected bool            $canToggleAggressiveAntiSpam,
        /**
         * True, if new chat members will have access to old messages. In public, discussion, of forum groups and all channels, old messages are always available, so this option affects only private non-forum supergroups without a linked chat. The value of this field is only available to chat administrators.
         */
        protected bool            $isAllHistoryAvailable,
        /**
         * True, if the chat can have sponsored messages. The value of this field is only available to the owner of the chat.
         */
        protected bool            $canHaveSponsoredMessages,
        /**
         * True, if aggressive anti-spam checks are enabled in the supergroup. The value of this field is only available to chat administrators.
         */
        protected bool            $hasAggressiveAntiSpamEnabled,
        /**
         * True, if paid media can be sent and forwarded to the channel chat; for channels only.
         */
        protected bool            $hasPaidMediaAllowed,
        /**
         * True, if the supergroup or channel has pinned stories.
         */
        protected bool            $hasPinnedStories,
        /**
         * Number of times the current user boosted the supergroup or channel.
         */
        protected int             $myBoostCount,
        /**
         * Number of times the supergroup must be boosted by a user to ignore slow mode and chat permission restrictions; 0 if unspecified.
         */
        protected int             $unrestrictBoostCount,
        /**
         * Identifier of the supergroup sticker set that must be shown before user sticker sets; 0 if none.
         */
        protected int             $stickerSetId,
        /**
         * Identifier of the custom emoji sticker set that can be used in the supergroup without Telegram Premium subscription; 0 if none.
         */
        protected int             $customEmojiStickerSetId,
        /**
         * Location to which the supergroup is connected; may be null if none.
         */
        protected ?ChatLocation   $location,
        /**
         * Primary invite link for the chat; may be null. For chat administrators with can_invite_users right only.
         */
        protected ?ChatInviteLink $inviteLink,
        /**
         * List of commands of bots in the group.
         *
         * @var BotCommands[]
         */
        protected array           $botCommands,
        /**
         * Identifier of the basic group from which supergroup was upgraded; 0 if none.
         */
        protected int             $upgradedFromBasicGroupId,
        /**
         * Identifier of the last message in the basic group from which supergroup was upgraded; 0 if none.
         */
        protected int             $upgradedFromMaxMessageId,
    ) {}

    public static function fromArray(array $array): SupergroupFullInfo
    {
        return new static(
            isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null,
            $array['description'],
            $array['member_count'],
            $array['administrator_count'],
            $array['restricted_count'],
            $array['banned_count'],
            $array['linked_chat_id'],
            $array['slow_mode_delay'],
            $array['slow_mode_delay_expires_in'],
            $array['can_enable_paid_reaction'],
            $array['can_get_members'],
            $array['has_hidden_members'],
            $array['can_hide_members'],
            $array['can_set_sticker_set'],
            $array['can_set_location'],
            $array['can_get_statistics'],
            $array['can_get_revenue_statistics'],
            $array['can_get_star_revenue_statistics'],
            $array['can_toggle_aggressive_anti_spam'],
            $array['is_all_history_available'],
            $array['can_have_sponsored_messages'],
            $array['has_aggressive_anti_spam_enabled'],
            $array['has_paid_media_allowed'],
            $array['has_pinned_stories'],
            $array['my_boost_count'],
            $array['unrestrict_boost_count'],
            $array['sticker_set_id'],
            $array['custom_emoji_sticker_set_id'],
            isset($array['location']) ? TdSchemaRegistry::fromArray($array['location']) : null,
            isset($array['invite_link']) ? TdSchemaRegistry::fromArray($array['invite_link']) : null,
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['bot_commands']),
            $array['upgraded_from_basic_group_id'],
            $array['upgraded_from_max_message_id'],
        );
    }

    public function getAdministratorCount(): int
    {
        return $this->administratorCount;
    }

    public function getBannedCount(): int
    {
        return $this->bannedCount;
    }

    public function getBotCommands(): array
    {
        return $this->botCommands;
    }

    public function getCanEnablePaidReaction(): bool
    {
        return $this->canEnablePaidReaction;
    }

    public function getCanGetMembers(): bool
    {
        return $this->canGetMembers;
    }

    public function getCanGetRevenueStatistics(): bool
    {
        return $this->canGetRevenueStatistics;
    }

    public function getCanGetStarRevenueStatistics(): bool
    {
        return $this->canGetStarRevenueStatistics;
    }

    public function getCanGetStatistics(): bool
    {
        return $this->canGetStatistics;
    }

    public function getCanHaveSponsoredMessages(): bool
    {
        return $this->canHaveSponsoredMessages;
    }

    public function getCanHideMembers(): bool
    {
        return $this->canHideMembers;
    }

    public function getCanSetLocation(): bool
    {
        return $this->canSetLocation;
    }

    public function getCanSetStickerSet(): bool
    {
        return $this->canSetStickerSet;
    }

    public function getCanToggleAggressiveAntiSpam(): bool
    {
        return $this->canToggleAggressiveAntiSpam;
    }

    public function getCustomEmojiStickerSetId(): int
    {
        return $this->customEmojiStickerSetId;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getHasAggressiveAntiSpamEnabled(): bool
    {
        return $this->hasAggressiveAntiSpamEnabled;
    }

    public function getHasHiddenMembers(): bool
    {
        return $this->hasHiddenMembers;
    }

    public function getHasPaidMediaAllowed(): bool
    {
        return $this->hasPaidMediaAllowed;
    }

    public function getHasPinnedStories(): bool
    {
        return $this->hasPinnedStories;
    }

    public function getInviteLink(): ?ChatInviteLink
    {
        return $this->inviteLink;
    }

    public function getIsAllHistoryAvailable(): bool
    {
        return $this->isAllHistoryAvailable;
    }

    public function getLinkedChatId(): int
    {
        return $this->linkedChatId;
    }

    public function getLocation(): ?ChatLocation
    {
        return $this->location;
    }

    public function getMemberCount(): int
    {
        return $this->memberCount;
    }

    public function getMyBoostCount(): int
    {
        return $this->myBoostCount;
    }

    public function getPhoto(): ?ChatPhoto
    {
        return $this->photo;
    }

    public function getRestrictedCount(): int
    {
        return $this->restrictedCount;
    }

    public function getSlowModeDelay(): int
    {
        return $this->slowModeDelay;
    }

    public function getSlowModeDelayExpiresIn(): float
    {
        return $this->slowModeDelayExpiresIn;
    }

    public function getStickerSetId(): int
    {
        return $this->stickerSetId;
    }

    public function getUnrestrictBoostCount(): int
    {
        return $this->unrestrictBoostCount;
    }

    public function getUpgradedFromBasicGroupId(): int
    {
        return $this->upgradedFromBasicGroupId;
    }

    public function getUpgradedFromMaxMessageId(): int
    {
        return $this->upgradedFromMaxMessageId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                            => static::TYPE_NAME,
            'photo'                            => (isset($this->photo) ? $this->photo : null),
            'description'                      => $this->description,
            'member_count'                     => $this->memberCount,
            'administrator_count'              => $this->administratorCount,
            'restricted_count'                 => $this->restrictedCount,
            'banned_count'                     => $this->bannedCount,
            'linked_chat_id'                   => $this->linkedChatId,
            'slow_mode_delay'                  => $this->slowModeDelay,
            'slow_mode_delay_expires_in'       => $this->slowModeDelayExpiresIn,
            'can_enable_paid_reaction'         => $this->canEnablePaidReaction,
            'can_get_members'                  => $this->canGetMembers,
            'has_hidden_members'               => $this->hasHiddenMembers,
            'can_hide_members'                 => $this->canHideMembers,
            'can_set_sticker_set'              => $this->canSetStickerSet,
            'can_set_location'                 => $this->canSetLocation,
            'can_get_statistics'               => $this->canGetStatistics,
            'can_get_revenue_statistics'       => $this->canGetRevenueStatistics,
            'can_get_star_revenue_statistics'  => $this->canGetStarRevenueStatistics,
            'can_toggle_aggressive_anti_spam'  => $this->canToggleAggressiveAntiSpam,
            'is_all_history_available'         => $this->isAllHistoryAvailable,
            'can_have_sponsored_messages'      => $this->canHaveSponsoredMessages,
            'has_aggressive_anti_spam_enabled' => $this->hasAggressiveAntiSpamEnabled,
            'has_paid_media_allowed'           => $this->hasPaidMediaAllowed,
            'has_pinned_stories'               => $this->hasPinnedStories,
            'my_boost_count'                   => $this->myBoostCount,
            'unrestrict_boost_count'           => $this->unrestrictBoostCount,
            'sticker_set_id'                   => $this->stickerSetId,
            'custom_emoji_sticker_set_id'      => $this->customEmojiStickerSetId,
            'location'                         => (isset($this->location) ? $this->location : null),
            'invite_link'                      => (isset($this->inviteLink) ? $this->inviteLink : null),
            array_map(fn($x) => $x->typeSerialize(), $this->botCommands),
            'upgraded_from_basic_group_id'     => $this->upgradedFromBasicGroupId,
            'upgraded_from_max_message_id'     => $this->upgradedFromMaxMessageId,
        ];
    }
}

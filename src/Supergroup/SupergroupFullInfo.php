<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Supergroup;

use Totaldev\TgSchema\Bot\BotCommands;
use Totaldev\TgSchema\Bot\BotVerification;
use Totaldev\TgSchema\Chat\ChatInviteLink;
use Totaldev\TgSchema\Chat\ChatLocation;
use Totaldev\TgSchema\Chat\ChatPhoto;
use Totaldev\TgSchema\Profile\ProfileTab;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains full information about a supergroup or channel.
 */
class SupergroupFullInfo extends TdObject
{
    public const string TYPE_NAME = 'supergroupFullInfo';

    public function __construct(
        /**
         * Number of privileged users in the supergroup or channel; 0 if unknown.
         */
        protected int              $administratorCount,
        /**
         * Number of users banned from chat; 0 if unknown.
         */
        protected int              $bannedCount,
        /**
         * List of commands of bots in the group.
         *
         * @var BotCommands[]
         */
        protected array            $botCommands,
        /**
         * Information about verification status of the supergroup or the channel provided by a bot; may be null if none or unknown.
         */
        protected ?BotVerification $botVerification,
        /**
         * True, if paid messages can be enabled in the supergroup chat; for supergroup only.
         */
        protected bool             $canEnablePaidMessages,
        /**
         * True, if paid reaction can be enabled in the channel chat; for channels only.
         */
        protected bool             $canEnablePaidReaction,
        /**
         * True, if members of the chat can be retrieved via getSupergroupMembers or searchChatMembers.
         */
        protected bool             $canGetMembers,
        /**
         * True, if the supergroup or channel revenue statistics are available.
         */
        protected bool             $canGetRevenueStatistics,
        /**
         * True, if the supergroup or channel Telegram Star revenue statistics are available.
         */
        protected bool             $canGetStarRevenueStatistics,
        /**
         * True, if the supergroup or channel statistics are available.
         */
        protected bool             $canGetStatistics,
        /**
         * True, if the chat can have sponsored messages. The value of this field is only available to the owner of the chat.
         */
        protected bool             $canHaveSponsoredMessages,
        /**
         * True, if non-administrators and non-bots can be hidden in responses to getSupergroupMembers and searchChatMembers for non-administrators.
         */
        protected bool             $canHideMembers,
        /**
         * True, if the user can send a gift to the supergroup or channel using sendGift or transferGift.
         */
        protected bool             $canSendGift,
        /**
         * True, if the supergroup location can be changed.
         */
        protected bool             $canSetLocation,
        /**
         * True, if the supergroup sticker set can be changed.
         */
        protected bool             $canSetStickerSet,
        /**
         * True, if aggressive anti-spam checks can be enabled or disabled in the supergroup.
         */
        protected bool             $canToggleAggressiveAntiSpam,
        /**
         * Identifier of the custom emoji sticker set that can be used in the supergroup without Telegram Premium subscription; 0 if none.
         */
        protected int              $customEmojiStickerSetId,
        /**
         * Supergroup or channel description.
         */
        protected string           $description,
        /**
         * Chat identifier of a direct messages group for the channel, or a channel, for which the supergroup is the designated direct messages group; 0 if none.
         */
        protected int              $directMessagesChatId,
        /**
         * Number of saved to profile gifts for channels without can_post_messages administrator right, otherwise, the total number of received gifts.
         */
        protected int              $giftCount,
        /**
         * True, if aggressive anti-spam checks are enabled in the supergroup. The value of this field is only available to chat administrators.
         */
        protected bool             $hasAggressiveAntiSpamEnabled,
        /**
         * True, if non-administrators can receive only administrators and bots using getSupergroupMembers or searchChatMembers.
         */
        protected bool             $hasHiddenMembers,
        /**
         * True, if paid media can be sent and forwarded to the channel chat; for channels only.
         */
        protected bool             $hasPaidMediaAllowed,
        /**
         * True, if the supergroup or channel has pinned stories.
         */
        protected bool             $hasPinnedStories,
        /**
         * Primary invite link for the chat; may be null. For chat administrators with can_invite_users right only.
         */
        protected ?ChatInviteLink  $inviteLink,
        /**
         * True, if new chat members will have access to old messages. In public, discussion, of forum groups and all channels, old messages are always available, so this option affects only private non-forum supergroups without a linked chat. The value of this field is only available to chat administrators.
         */
        protected bool             $isAllHistoryAvailable,
        /**
         * Chat identifier of a discussion group for the channel, or a channel, for which the supergroup is the designated discussion group; 0 if none or unknown.
         */
        protected int              $linkedChatId,
        /**
         * Location to which the supergroup is connected; may be null if none.
         */
        protected ?ChatLocation    $location,
        /**
         * The main tab chosen by the administrators of the channel; may be null if not chosen manually.
         */
        protected ?ProfileTab      $mainProfileTab,
        /**
         * Number of members in the supergroup or channel; 0 if unknown.
         */
        protected int              $memberCount,
        /**
         * Number of times the current user boosted the supergroup or channel.
         */
        protected int              $myBoostCount,
        /**
         * Number of Telegram Stars that must be paid by the current user for each sent message to the supergroup.
         */
        protected int              $outgoingPaidMessageStarCount,
        /**
         * Chat photo; may be null if empty or unknown. If non-null, then it is the same photo as in chat.photo.
         */
        protected ?ChatPhoto       $photo,
        /**
         * Number of restricted users in the supergroup; 0 if unknown.
         */
        protected int              $restrictedCount,
        /**
         * Delay between consecutive sent messages for non-administrator supergroup members, in seconds.
         */
        protected int              $slowModeDelay,
        /**
         * Time left before next message can be sent in the supergroup, in seconds. An updateSupergroupFullInfo update is not triggered when value of this field changes, but both new and old values are non-zero.
         */
        protected float            $slowModeDelayExpiresIn,
        /**
         * Identifier of the supergroup sticker set that must be shown before user sticker sets; 0 if none.
         */
        protected int              $stickerSetId,
        /**
         * Number of times the supergroup must be boosted by a user to ignore slow mode and chat permission restrictions; 0 if unspecified.
         */
        protected int              $unrestrictBoostCount,
        /**
         * Identifier of the basic group from which supergroup was upgraded; 0 if none.
         */
        protected int              $upgradedFromBasicGroupId,
        /**
         * Identifier of the last message in the basic group from which supergroup was upgraded; 0 if none.
         */
        protected int              $upgradedFromMaxMessageId,
    ) {}

    public static function fromArray(array $array): SupergroupFullInfo
    {
        return new static(
            administratorCount          : $array['administrator_count'],
            bannedCount                 : $array['banned_count'],
            botCommands                 : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['bot_commands']),
            botVerification             : (isset($array['bot_verification']) ? TdSchemaRegistry::fromArray($array['bot_verification']) : null),
            canEnablePaidMessages       : $array['can_enable_paid_messages'],
            canEnablePaidReaction       : $array['can_enable_paid_reaction'],
            canGetMembers               : $array['can_get_members'],
            canGetRevenueStatistics     : $array['can_get_revenue_statistics'],
            canGetStarRevenueStatistics : $array['can_get_star_revenue_statistics'],
            canGetStatistics            : $array['can_get_statistics'],
            canHaveSponsoredMessages    : $array['can_have_sponsored_messages'],
            canHideMembers              : $array['can_hide_members'],
            canSendGift                 : $array['can_send_gift'],
            canSetLocation              : $array['can_set_location'],
            canSetStickerSet            : $array['can_set_sticker_set'],
            canToggleAggressiveAntiSpam : $array['can_toggle_aggressive_anti_spam'],
            customEmojiStickerSetId     : $array['custom_emoji_sticker_set_id'],
            description                 : $array['description'],
            directMessagesChatId        : $array['direct_messages_chat_id'],
            giftCount                   : $array['gift_count'],
            hasAggressiveAntiSpamEnabled: $array['has_aggressive_anti_spam_enabled'],
            hasHiddenMembers            : $array['has_hidden_members'],
            hasPaidMediaAllowed         : $array['has_paid_media_allowed'],
            hasPinnedStories            : $array['has_pinned_stories'],
            inviteLink                  : (isset($array['invite_link']) ? TdSchemaRegistry::fromArray($array['invite_link']) : null),
            isAllHistoryAvailable       : $array['is_all_history_available'],
            linkedChatId                : $array['linked_chat_id'],
            location                    : (isset($array['location']) ? TdSchemaRegistry::fromArray($array['location']) : null),
            mainProfileTab              : (isset($array['main_profile_tab']) ? TdSchemaRegistry::fromArray($array['main_profile_tab']) : null),
            memberCount                 : $array['member_count'],
            myBoostCount                : $array['my_boost_count'],
            outgoingPaidMessageStarCount: $array['outgoing_paid_message_star_count'],
            photo                       : (isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null),
            restrictedCount             : $array['restricted_count'],
            slowModeDelay               : $array['slow_mode_delay'],
            slowModeDelayExpiresIn      : $array['slow_mode_delay_expires_in'],
            stickerSetId                : $array['sticker_set_id'],
            unrestrictBoostCount        : $array['unrestrict_boost_count'],
            upgradedFromBasicGroupId    : $array['upgraded_from_basic_group_id'],
            upgradedFromMaxMessageId    : $array['upgraded_from_max_message_id'],
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

    public function getBotVerification(): ?BotVerification
    {
        return $this->botVerification;
    }

    public function getCanEnablePaidMessages(): bool
    {
        return $this->canEnablePaidMessages;
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

    public function getCanSendGift(): bool
    {
        return $this->canSendGift;
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

    public function getDirectMessagesChatId(): int
    {
        return $this->directMessagesChatId;
    }

    public function getGiftCount(): int
    {
        return $this->giftCount;
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

    public function getMainProfileTab(): ?ProfileTab
    {
        return $this->mainProfileTab;
    }

    public function getMemberCount(): int
    {
        return $this->memberCount;
    }

    public function getMyBoostCount(): int
    {
        return $this->myBoostCount;
    }

    public function getOutgoingPaidMessageStarCount(): int
    {
        return $this->outgoingPaidMessageStarCount;
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

    public function setAdministratorCount(int $value): static
    {
        $this->administratorCount = $value;

        return $this;
    }

    public function setBannedCount(int $value): static
    {
        $this->bannedCount = $value;

        return $this;
    }

    public function setBotCommands(array $value): static
    {
        $this->botCommands = $value;

        return $this;
    }

    public function setBotVerification(?BotVerification $value): static
    {
        $this->botVerification = $value;

        return $this;
    }

    public function setCanEnablePaidMessages(bool $value): static
    {
        $this->canEnablePaidMessages = $value;

        return $this;
    }

    public function setCanEnablePaidReaction(bool $value): static
    {
        $this->canEnablePaidReaction = $value;

        return $this;
    }

    public function setCanGetMembers(bool $value): static
    {
        $this->canGetMembers = $value;

        return $this;
    }

    public function setCanGetRevenueStatistics(bool $value): static
    {
        $this->canGetRevenueStatistics = $value;

        return $this;
    }

    public function setCanGetStarRevenueStatistics(bool $value): static
    {
        $this->canGetStarRevenueStatistics = $value;

        return $this;
    }

    public function setCanGetStatistics(bool $value): static
    {
        $this->canGetStatistics = $value;

        return $this;
    }

    public function setCanHaveSponsoredMessages(bool $value): static
    {
        $this->canHaveSponsoredMessages = $value;

        return $this;
    }

    public function setCanHideMembers(bool $value): static
    {
        $this->canHideMembers = $value;

        return $this;
    }

    public function setCanSendGift(bool $value): static
    {
        $this->canSendGift = $value;

        return $this;
    }

    public function setCanSetLocation(bool $value): static
    {
        $this->canSetLocation = $value;

        return $this;
    }

    public function setCanSetStickerSet(bool $value): static
    {
        $this->canSetStickerSet = $value;

        return $this;
    }

    public function setCanToggleAggressiveAntiSpam(bool $value): static
    {
        $this->canToggleAggressiveAntiSpam = $value;

        return $this;
    }

    public function setCustomEmojiStickerSetId(int $value): static
    {
        $this->customEmojiStickerSetId = $value;

        return $this;
    }

    public function setDescription(string $value): static
    {
        $this->description = $value;

        return $this;
    }

    public function setDirectMessagesChatId(int $value): static
    {
        $this->directMessagesChatId = $value;

        return $this;
    }

    public function setGiftCount(int $value): static
    {
        $this->giftCount = $value;

        return $this;
    }

    public function setHasAggressiveAntiSpamEnabled(bool $value): static
    {
        $this->hasAggressiveAntiSpamEnabled = $value;

        return $this;
    }

    public function setHasHiddenMembers(bool $value): static
    {
        $this->hasHiddenMembers = $value;

        return $this;
    }

    public function setHasPaidMediaAllowed(bool $value): static
    {
        $this->hasPaidMediaAllowed = $value;

        return $this;
    }

    public function setHasPinnedStories(bool $value): static
    {
        $this->hasPinnedStories = $value;

        return $this;
    }

    public function setInviteLink(?ChatInviteLink $value): static
    {
        $this->inviteLink = $value;

        return $this;
    }

    public function setIsAllHistoryAvailable(bool $value): static
    {
        $this->isAllHistoryAvailable = $value;

        return $this;
    }

    public function setLinkedChatId(int $value): static
    {
        $this->linkedChatId = $value;

        return $this;
    }

    public function setLocation(?ChatLocation $value): static
    {
        $this->location = $value;

        return $this;
    }

    public function setMainProfileTab(?ProfileTab $value): static
    {
        $this->mainProfileTab = $value;

        return $this;
    }

    public function setMemberCount(int $value): static
    {
        $this->memberCount = $value;

        return $this;
    }

    public function setMyBoostCount(int $value): static
    {
        $this->myBoostCount = $value;

        return $this;
    }

    public function setOutgoingPaidMessageStarCount(int $value): static
    {
        $this->outgoingPaidMessageStarCount = $value;

        return $this;
    }

    public function setPhoto(?ChatPhoto $value): static
    {
        $this->photo = $value;

        return $this;
    }

    public function setRestrictedCount(int $value): static
    {
        $this->restrictedCount = $value;

        return $this;
    }

    public function setSlowModeDelay(int $value): static
    {
        $this->slowModeDelay = $value;

        return $this;
    }

    public function setSlowModeDelayExpiresIn(float $value): static
    {
        $this->slowModeDelayExpiresIn = $value;

        return $this;
    }

    public function setStickerSetId(int $value): static
    {
        $this->stickerSetId = $value;

        return $this;
    }

    public function setUnrestrictBoostCount(int $value): static
    {
        $this->unrestrictBoostCount = $value;

        return $this;
    }

    public function setUpgradedFromBasicGroupId(int $value): static
    {
        $this->upgradedFromBasicGroupId = $value;

        return $this;
    }

    public function setUpgradedFromMaxMessageId(int $value): static
    {
        $this->upgradedFromMaxMessageId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                            => static::TYPE_NAME,
            'administrator_count'              => $this->administratorCount,
            'banned_count'                     => $this->bannedCount,
            'bot_commands'                     => array_map(static fn($x) => $x->jsonSerialize(), $this->botCommands),
            'bot_verification'                 => (null !== $this->botVerification ? $this->botVerification->jsonSerialize() : null),
            'can_enable_paid_messages'         => $this->canEnablePaidMessages,
            'can_enable_paid_reaction'         => $this->canEnablePaidReaction,
            'can_get_members'                  => $this->canGetMembers,
            'can_get_revenue_statistics'       => $this->canGetRevenueStatistics,
            'can_get_star_revenue_statistics'  => $this->canGetStarRevenueStatistics,
            'can_get_statistics'               => $this->canGetStatistics,
            'can_have_sponsored_messages'      => $this->canHaveSponsoredMessages,
            'can_hide_members'                 => $this->canHideMembers,
            'can_send_gift'                    => $this->canSendGift,
            'can_set_location'                 => $this->canSetLocation,
            'can_set_sticker_set'              => $this->canSetStickerSet,
            'can_toggle_aggressive_anti_spam'  => $this->canToggleAggressiveAntiSpam,
            'custom_emoji_sticker_set_id'      => $this->customEmojiStickerSetId,
            'description'                      => $this->description,
            'direct_messages_chat_id'          => $this->directMessagesChatId,
            'gift_count'                       => $this->giftCount,
            'has_aggressive_anti_spam_enabled' => $this->hasAggressiveAntiSpamEnabled,
            'has_hidden_members'               => $this->hasHiddenMembers,
            'has_paid_media_allowed'           => $this->hasPaidMediaAllowed,
            'has_pinned_stories'               => $this->hasPinnedStories,
            'invite_link'                      => (null !== $this->inviteLink ? $this->inviteLink->jsonSerialize() : null),
            'is_all_history_available'         => $this->isAllHistoryAvailable,
            'linked_chat_id'                   => $this->linkedChatId,
            'location'                         => (null !== $this->location ? $this->location->jsonSerialize() : null),
            'main_profile_tab'                 => (null !== $this->mainProfileTab ? $this->mainProfileTab->jsonSerialize() : null),
            'member_count'                     => $this->memberCount,
            'my_boost_count'                   => $this->myBoostCount,
            'outgoing_paid_message_star_count' => $this->outgoingPaidMessageStarCount,
            'photo'                            => (null !== $this->photo ? $this->photo->jsonSerialize() : null),
            'restricted_count'                 => $this->restrictedCount,
            'slow_mode_delay'                  => $this->slowModeDelay,
            'slow_mode_delay_expires_in'       => $this->slowModeDelayExpiresIn,
            'sticker_set_id'                   => $this->stickerSetId,
            'unrestrict_boost_count'           => $this->unrestrictBoostCount,
            'upgraded_from_basic_group_id'     => $this->upgradedFromBasicGroupId,
            'upgraded_from_max_message_id'     => $this->upgradedFromMaxMessageId,
        ];
    }
}

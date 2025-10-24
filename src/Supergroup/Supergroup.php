<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Supergroup;

use Totaldev\TgSchema\Chat\ChatMemberStatus;
use Totaldev\TgSchema\Restriction\RestrictionInfo;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Usernames\Usernames;
use Totaldev\TgSchema\Verification\VerificationStatus;

/**
 * Represents a supergroup or channel with zero or more members (subscribers in the case of channels). From the point of view of the system, a channel is a
 * special kind of a supergroup: only administrators can post and see the list of members, and posts from all administrators use the name and photo of the
 * channel instead of individual names and profile photos. Unlike supergroups, channels can have an unlimited number of subscribers.
 */
class Supergroup extends TdObject
{
    public const string TYPE_NAME = 'supergroup';

    public function __construct(
        /**
         * Supergroup or channel identifier.
         */
        protected int                 $id,
        /**
         * Usernames of the supergroup or channel; may be null.
         */
        protected ?Usernames          $usernames,
        /**
         * Point in time (Unix timestamp) when the current user joined, or the point in time when the supergroup or channel was created, in case the user is not a member.
         */
        protected int                 $date,
        /**
         * Status of the current user in the supergroup or channel; custom title will always be empty.
         */
        protected ChatMemberStatus    $status,
        /**
         * Number of members in the supergroup or channel; 0 if unknown. Currently, it is guaranteed to be known only if the supergroup or channel was received through getChatSimilarChats, getChatsToPostStories, getCreatedPublicChats, getGroupsInCommon, getInactiveSupergroupChats, getRecommendedChats, getSuitableDiscussionChats, getUserPrivacySettingRules, getVideoChatAvailableParticipants, searchPublicChats, or in chatFolderInviteLinkInfo.missing_chat_ids, or in userFullInfo.personal_chat_id, or for chats with messages or stories from publicForwards and foundStories.
         */
        protected int                 $memberCount,
        /**
         * Approximate boost level for the chat.
         */
        protected int                 $boostLevel,
        /**
         * True, if automatic translation of messages is enabled in the channel.
         */
        protected bool                $hasAutomaticTranslation,
        /**
         * True, if the channel has a discussion group, or the supergroup is the designated discussion group for a channel.
         */
        protected bool                $hasLinkedChat,
        /**
         * True, if the supergroup is connected to a location, i.e. the supergroup is a location-based supergroup.
         */
        protected bool                $hasLocation,
        /**
         * True, if messages sent to the channel contains name of the sender. This field is only applicable to channels.
         */
        protected bool                $signMessages,
        /**
         * True, if messages sent to the channel have information about the sender user. This field is only applicable to channels.
         */
        protected bool                $showMessageSender,
        /**
         * True, if users need to join the supergroup before they can send messages. May be false only for discussion supergroups and channel direct messages groups.
         */
        protected bool                $joinToSendMessages,
        /**
         * True, if all users directly joining the supergroup need to be approved by supergroup administrators. Can be true only for non-broadcast supergroups with username, location, or a linked chat.
         */
        protected bool                $joinByRequest,
        /**
         * True, if the slow mode is enabled in the supergroup.
         */
        protected bool                $isSlowModeEnabled,
        /**
         * True, if the supergroup is a channel.
         */
        protected bool                $isChannel,
        /**
         * True, if the supergroup is a broadcast group, i.e. only administrators can send messages and there is no limit on the number of members.
         */
        protected bool                $isBroadcastGroup,
        /**
         * True, if the supergroup is a forum with topics.
         */
        protected bool                $isForum,
        /**
         * True, if the supergroup is a direct message group for a channel chat.
         */
        protected bool                $isDirectMessagesGroup,
        /**
         * True, if the supergroup is a direct messages group for a channel chat that is administered by the current user.
         */
        protected bool                $isAdministeredDirectMessagesGroup,
        /**
         * Information about verification status of the supergroup or channel; may be null if none.
         */
        protected ?VerificationStatus $verificationStatus,
        /**
         * True, if the channel has direct messages group.
         */
        protected bool                $hasDirectMessagesGroup,
        /**
         * True, if the supergroup is a forum, which topics are shown in the same way as in channel direct messages groups.
         */
        protected bool                $hasForumTabs,
        /**
         * Information about the restrictions that must be applied to the corresponding supergroup or channel chat; may be null if none.
         */
        protected ?RestrictionInfo    $restrictionInfo,
        /**
         * Number of Telegram Stars that must be paid by non-administrator users of the supergroup chat for each sent message.
         */
        protected int                 $paidMessageStarCount,
        /**
         * True, if the supergroup or channel has non-expired stories available to the current user.
         */
        protected bool                $hasActiveStories,
        /**
         * True, if the supergroup or channel has unread non-expired stories available to the current user.
         */
        protected bool                $hasUnreadActiveStories,
    ) {}

    public static function fromArray(array $array): Supergroup
    {
        return new static(
            $array['id'],
            isset($array['usernames']) ? TdSchemaRegistry::fromArray($array['usernames']) : null,
            $array['date'],
            TdSchemaRegistry::fromArray($array['status']),
            $array['member_count'],
            $array['boost_level'],
            $array['has_automatic_translation'],
            $array['has_linked_chat'],
            $array['has_location'],
            $array['sign_messages'],
            $array['show_message_sender'],
            $array['join_to_send_messages'],
            $array['join_by_request'],
            $array['is_slow_mode_enabled'],
            $array['is_channel'],
            $array['is_broadcast_group'],
            $array['is_forum'],
            $array['is_direct_messages_group'],
            $array['is_administered_direct_messages_group'],
            isset($array['verification_status']) ? TdSchemaRegistry::fromArray($array['verification_status']) : null,
            $array['has_direct_messages_group'],
            $array['has_forum_tabs'],
            isset($array['restriction_info']) ? TdSchemaRegistry::fromArray($array['restriction_info']) : null,
            $array['paid_message_star_count'],
            $array['has_active_stories'],
            $array['has_unread_active_stories'],
        );
    }

    public function getBoostLevel(): int
    {
        return $this->boostLevel;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getHasActiveStories(): bool
    {
        return $this->hasActiveStories;
    }

    public function getHasAutomaticTranslation(): bool
    {
        return $this->hasAutomaticTranslation;
    }

    public function getHasDirectMessagesGroup(): bool
    {
        return $this->hasDirectMessagesGroup;
    }

    public function getHasForumTabs(): bool
    {
        return $this->hasForumTabs;
    }

    public function getHasLinkedChat(): bool
    {
        return $this->hasLinkedChat;
    }

    public function getHasLocation(): bool
    {
        return $this->hasLocation;
    }

    public function getHasUnreadActiveStories(): bool
    {
        return $this->hasUnreadActiveStories;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getIsAdministeredDirectMessagesGroup(): bool
    {
        return $this->isAdministeredDirectMessagesGroup;
    }

    public function getIsBroadcastGroup(): bool
    {
        return $this->isBroadcastGroup;
    }

    public function getIsChannel(): bool
    {
        return $this->isChannel;
    }

    public function getIsDirectMessagesGroup(): bool
    {
        return $this->isDirectMessagesGroup;
    }

    public function getIsForum(): bool
    {
        return $this->isForum;
    }

    public function getIsSlowModeEnabled(): bool
    {
        return $this->isSlowModeEnabled;
    }

    public function getJoinByRequest(): bool
    {
        return $this->joinByRequest;
    }

    public function getJoinToSendMessages(): bool
    {
        return $this->joinToSendMessages;
    }

    public function getMemberCount(): int
    {
        return $this->memberCount;
    }

    public function getPaidMessageStarCount(): int
    {
        return $this->paidMessageStarCount;
    }

    public function getRestrictionInfo(): ?RestrictionInfo
    {
        return $this->restrictionInfo;
    }

    public function getShowMessageSender(): bool
    {
        return $this->showMessageSender;
    }

    public function getSignMessages(): bool
    {
        return $this->signMessages;
    }

    public function getStatus(): ChatMemberStatus
    {
        return $this->status;
    }

    public function getUsernames(): ?Usernames
    {
        return $this->usernames;
    }

    public function getVerificationStatus(): ?VerificationStatus
    {
        return $this->verificationStatus;
    }

    public function setBoostLevel(int $value): static
    {
        $this->boostLevel = $value;

        return $this;
    }

    public function setDate(int $value): static
    {
        $this->date = $value;

        return $this;
    }

    public function setHasActiveStories(bool $value): static
    {
        $this->hasActiveStories = $value;

        return $this;
    }

    public function setHasAutomaticTranslation(bool $value): static
    {
        $this->hasAutomaticTranslation = $value;

        return $this;
    }

    public function setHasDirectMessagesGroup(bool $value): static
    {
        $this->hasDirectMessagesGroup = $value;

        return $this;
    }

    public function setHasForumTabs(bool $value): static
    {
        $this->hasForumTabs = $value;

        return $this;
    }

    public function setHasLinkedChat(bool $value): static
    {
        $this->hasLinkedChat = $value;

        return $this;
    }

    public function setHasLocation(bool $value): static
    {
        $this->hasLocation = $value;

        return $this;
    }

    public function setHasUnreadActiveStories(bool $value): static
    {
        $this->hasUnreadActiveStories = $value;

        return $this;
    }

    public function setId(int $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setIsAdministeredDirectMessagesGroup(bool $value): static
    {
        $this->isAdministeredDirectMessagesGroup = $value;

        return $this;
    }

    public function setIsBroadcastGroup(bool $value): static
    {
        $this->isBroadcastGroup = $value;

        return $this;
    }

    public function setIsChannel(bool $value): static
    {
        $this->isChannel = $value;

        return $this;
    }

    public function setIsDirectMessagesGroup(bool $value): static
    {
        $this->isDirectMessagesGroup = $value;

        return $this;
    }

    public function setIsForum(bool $value): static
    {
        $this->isForum = $value;

        return $this;
    }

    public function setIsSlowModeEnabled(bool $value): static
    {
        $this->isSlowModeEnabled = $value;

        return $this;
    }

    public function setJoinByRequest(bool $value): static
    {
        $this->joinByRequest = $value;

        return $this;
    }

    public function setJoinToSendMessages(bool $value): static
    {
        $this->joinToSendMessages = $value;

        return $this;
    }

    public function setMemberCount(int $value): static
    {
        $this->memberCount = $value;

        return $this;
    }

    public function setPaidMessageStarCount(int $value): static
    {
        $this->paidMessageStarCount = $value;

        return $this;
    }

    public function setRestrictionInfo(?RestrictionInfo $value): static
    {
        $this->restrictionInfo = $value;

        return $this;
    }

    public function setShowMessageSender(bool $value): static
    {
        $this->showMessageSender = $value;

        return $this;
    }

    public function setSignMessages(bool $value): static
    {
        $this->signMessages = $value;

        return $this;
    }

    public function setStatus(ChatMemberStatus $value): static
    {
        $this->status = $value;

        return $this;
    }

    public function setUsernames(?Usernames $value): static
    {
        $this->usernames = $value;

        return $this;
    }

    public function setVerificationStatus(?VerificationStatus $value): static
    {
        $this->verificationStatus = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                                 => static::TYPE_NAME,
            'id'                                    => $this->id,
            'usernames'                             => $this->usernames ?? null,
            'date'                                  => $this->date,
            'status'                                => $this->status->typeSerialize(),
            'member_count'                          => $this->memberCount,
            'boost_level'                           => $this->boostLevel,
            'has_automatic_translation'             => $this->hasAutomaticTranslation,
            'has_linked_chat'                       => $this->hasLinkedChat,
            'has_location'                          => $this->hasLocation,
            'sign_messages'                         => $this->signMessages,
            'show_message_sender'                   => $this->showMessageSender,
            'join_to_send_messages'                 => $this->joinToSendMessages,
            'join_by_request'                       => $this->joinByRequest,
            'is_slow_mode_enabled'                  => $this->isSlowModeEnabled,
            'is_channel'                            => $this->isChannel,
            'is_broadcast_group'                    => $this->isBroadcastGroup,
            'is_forum'                              => $this->isForum,
            'is_direct_messages_group'              => $this->isDirectMessagesGroup,
            'is_administered_direct_messages_group' => $this->isAdministeredDirectMessagesGroup,
            'verification_status'                   => $this->verificationStatus ?? null,
            'has_direct_messages_group'             => $this->hasDirectMessagesGroup,
            'has_forum_tabs'                        => $this->hasForumTabs,
            'restriction_info'                      => $this->restrictionInfo ?? null,
            'paid_message_star_count'               => $this->paidMessageStarCount,
            'has_active_stories'                    => $this->hasActiveStories,
            'has_unread_active_stories'             => $this->hasUnreadActiveStories,
        ];
    }
}

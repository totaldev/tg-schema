<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Supergroup;

use Totaldev\TgSchema\Chat\ChatMemberStatus;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Usernames\Usernames;

/**
 * Represents a supergroup or channel with zero or more members (subscribers in the case of channels). From the point of view of the system, a channel is a
 * special kind of a supergroup: only administrators can post and see the list of members, and posts from all administrators use the name and photo of the
 * channel instead of individual names and profile photos. Unlike supergroups, channels can have an unlimited number of subscribers.
 */
class Supergroup extends TdObject
{
    public const TYPE_NAME = 'supergroup';

    public function __construct(
        /**
         * Supergroup or channel identifier.
         */
        protected int              $id,
        /**
         * Usernames of the supergroup or channel; may be null.
         */
        protected ?Usernames       $usernames,
        /**
         * Point in time (Unix timestamp) when the current user joined, or the point in time when the supergroup or channel was created, in case the user is not a member.
         */
        protected int              $date,
        /**
         * Status of the current user in the supergroup or channel; custom title will always be empty.
         */
        protected ChatMemberStatus $status,
        /**
         * Number of members in the supergroup or channel; 0 if unknown. Currently, it is guaranteed to be known only if the supergroup or channel was received through getChatSimilarChats, getChatsToSendStories, getCreatedPublicChats, getGroupsInCommon, getInactiveSupergroupChats, getRecommendedChats, getSuitableDiscussionChats, getUserPrivacySettingRules, getVideoChatAvailableParticipants, searchChatsNearby, searchPublicChats, or in chatFolderInviteLinkInfo.missing_chat_ids, or in userFullInfo.personal_chat_id, or for chats with messages or stories from publicForwards and foundStories.
         */
        protected int              $memberCount,
        /**
         * Approximate boost level for the chat.
         */
        protected int              $boostLevel,
        /**
         * True, if the channel has a discussion group, or the supergroup is the designated discussion group for a channel.
         */
        protected bool             $hasLinkedChat,
        /**
         * True, if the supergroup is connected to a location, i.e. the supergroup is a location-based supergroup.
         */
        protected bool             $hasLocation,
        /**
         * True, if messages sent to the channel contains name of the sender. This field is only applicable to channels.
         */
        protected bool             $signMessages,
        /**
         * True, if messages sent to the channel have information about the sender user. This field is only applicable to channels.
         */
        protected bool             $showMessageSender,
        /**
         * True, if users need to join the supergroup before they can send messages. Always true for channels and non-discussion supergroups.
         */
        protected bool             $joinToSendMessages,
        /**
         * True, if all users directly joining the supergroup need to be approved by supergroup administrators. Always false for channels and supergroups without username, location, or a linked chat.
         */
        protected bool             $joinByRequest,
        /**
         * True, if the slow mode is enabled in the supergroup.
         */
        protected bool             $isSlowModeEnabled,
        /**
         * True, if the supergroup is a channel.
         */
        protected bool             $isChannel,
        /**
         * True, if the supergroup is a broadcast group, i.e. only administrators can send messages and there is no limit on the number of members.
         */
        protected bool             $isBroadcastGroup,
        /**
         * True, if the supergroup is a forum with topics.
         */
        protected bool             $isForum,
        /**
         * True, if the supergroup or channel is verified.
         */
        protected bool             $isVerified,
        /**
         * True, if content of media messages in the supergroup or channel chat must be hidden with 18+ spoiler.
         */
        protected bool             $hasSensitiveContent,
        /**
         * If non-empty, contains a human-readable description of the reason why access to this supergroup or channel must be restricted.
         */
        protected string           $restrictionReason,
        /**
         * True, if many users reported this supergroup or channel as a scam.
         */
        protected bool             $isScam,
        /**
         * True, if many users reported this supergroup or channel as a fake account.
         */
        protected bool             $isFake,
        /**
         * True, if the supergroup or channel has non-expired stories available to the current user.
         */
        protected bool             $hasActiveStories,
        /**
         * True, if the supergroup or channel has unread non-expired stories available to the current user.
         */
        protected bool             $hasUnreadActiveStories,
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
            $array['is_verified'],
            $array['has_sensitive_content'],
            $array['restriction_reason'],
            $array['is_scam'],
            $array['is_fake'],
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

    public function getHasLinkedChat(): bool
    {
        return $this->hasLinkedChat;
    }

    public function getHasLocation(): bool
    {
        return $this->hasLocation;
    }

    public function getHasSensitiveContent(): bool
    {
        return $this->hasSensitiveContent;
    }

    public function getHasUnreadActiveStories(): bool
    {
        return $this->hasUnreadActiveStories;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getIsBroadcastGroup(): bool
    {
        return $this->isBroadcastGroup;
    }

    public function getIsChannel(): bool
    {
        return $this->isChannel;
    }

    public function getIsFake(): bool
    {
        return $this->isFake;
    }

    public function getIsForum(): bool
    {
        return $this->isForum;
    }

    public function getIsScam(): bool
    {
        return $this->isScam;
    }

    public function getIsSlowModeEnabled(): bool
    {
        return $this->isSlowModeEnabled;
    }

    public function getIsVerified(): bool
    {
        return $this->isVerified;
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

    public function getRestrictionReason(): string
    {
        return $this->restrictionReason;
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

    public function typeSerialize(): array
    {
        return [
            '@type'                     => static::TYPE_NAME,
            'id'                        => $this->id,
            'usernames'                 => (isset($this->usernames) ? $this->usernames : null),
            'date'                      => $this->date,
            'status'                    => $this->status->typeSerialize(),
            'member_count'              => $this->memberCount,
            'boost_level'               => $this->boostLevel,
            'has_linked_chat'           => $this->hasLinkedChat,
            'has_location'              => $this->hasLocation,
            'sign_messages'             => $this->signMessages,
            'show_message_sender'       => $this->showMessageSender,
            'join_to_send_messages'     => $this->joinToSendMessages,
            'join_by_request'           => $this->joinByRequest,
            'is_slow_mode_enabled'      => $this->isSlowModeEnabled,
            'is_channel'                => $this->isChannel,
            'is_broadcast_group'        => $this->isBroadcastGroup,
            'is_forum'                  => $this->isForum,
            'is_verified'               => $this->isVerified,
            'has_sensitive_content'     => $this->hasSensitiveContent,
            'restriction_reason'        => $this->restrictionReason,
            'is_scam'                   => $this->isScam,
            'is_fake'                   => $this->isFake,
            'has_active_stories'        => $this->hasActiveStories,
            'has_unread_active_stories' => $this->hasUnreadActiveStories,
        ];
    }
}

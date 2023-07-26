<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * Represents a supergroup or channel with zero or more members (subscribers in the case of channels). From the point of view of the system, a channel is a special kind of a supergroup: only administrators can post and see the list of members, and posts from all administrators use the name and photo of the channel instead of individual names and profile photos. Unlike supergroups, channels can have an unlimited number of subscribers
 */
class Supergroup extends TdObject
{
    public const TYPE_NAME = 'supergroup';

    /**
     * Supergroup or channel identifier
     *
     * @var int
     */
    protected int $id;

    /**
     * Usernames of the supergroup or channel; may be null
     *
     * @var Usernames|null
     */
    protected ?Usernames $usernames;

    /**
     * Point in time (Unix timestamp) when the current user joined, or the point in time when the supergroup or channel was created, in case the user is not a member
     *
     * @var int
     */
    protected int $date;

    /**
     * Status of the current user in the supergroup or channel; custom title will always be empty
     *
     * @var ChatMemberStatus
     */
    protected ChatMemberStatus $status;

    /**
     * Number of members in the supergroup or channel; 0 if unknown. Currently, it is guaranteed to be known only if the supergroup or channel was received through searchPublicChats, searchChatsNearby, getInactiveSupergroupChats, getSuitableDiscussionChats, getGroupsInCommon, getUserPrivacySettingRules, or in chatFolderInviteLinkInfo.missing_chat_ids
     *
     * @var int
     */
    protected int $memberCount;

    /**
     * True, if the channel has a discussion group, or the supergroup is the designated discussion group for a channel
     *
     * @var bool
     */
    protected bool $hasLinkedChat;

    /**
     * True, if the supergroup is connected to a location, i.e. the supergroup is a location-based supergroup
     *
     * @var bool
     */
    protected bool $hasLocation;

    /**
     * True, if messages sent to the channel need to contain information about the sender. This field is only applicable to channels
     *
     * @var bool
     */
    protected bool $signMessages;

    /**
     * True, if users need to join the supergroup before they can send messages. Always true for channels and non-discussion supergroups
     *
     * @var bool
     */
    protected bool $joinToSendMessages;

    /**
     * True, if all users directly joining the supergroup need to be approved by supergroup administrators. Always false for channels and supergroups without username, location, or a linked chat
     *
     * @var bool
     */
    protected bool $joinByRequest;

    /**
     * True, if the slow mode is enabled in the supergroup
     *
     * @var bool
     */
    protected bool $isSlowModeEnabled;

    /**
     * True, if the supergroup is a channel
     *
     * @var bool
     */
    protected bool $isChannel;

    /**
     * True, if the supergroup is a broadcast group, i.e. only administrators can send messages and there is no limit on the number of members
     *
     * @var bool
     */
    protected bool $isBroadcastGroup;

    /**
     * True, if the supergroup must be shown as a forum by default
     *
     * @var bool
     */
    protected bool $isForum;

    /**
     * True, if the supergroup or channel is verified
     *
     * @var bool
     */
    protected bool $isVerified;

    /**
     * If non-empty, contains a human-readable description of the reason why access to this supergroup or channel must be restricted
     *
     * @var string
     */
    protected string $restrictionReason;

    /**
     * True, if many users reported this supergroup or channel as a scam
     *
     * @var bool
     */
    protected bool $isScam;

    /**
     * True, if many users reported this supergroup or channel as a fake account
     *
     * @var bool
     */
    protected bool $isFake;

    public function __construct(
        int $id,
        ?Usernames $usernames,
        int $date,
        ChatMemberStatus $status,
        int $memberCount,
        bool $hasLinkedChat,
        bool $hasLocation,
        bool $signMessages,
        bool $joinToSendMessages,
        bool $joinByRequest,
        bool $isSlowModeEnabled,
        bool $isChannel,
        bool $isBroadcastGroup,
        bool $isForum,
        bool $isVerified,
        string $restrictionReason,
        bool $isScam,
        bool $isFake
    ) {
        $this->id = $id;
        $this->usernames = $usernames;
        $this->date = $date;
        $this->status = $status;
        $this->memberCount = $memberCount;
        $this->hasLinkedChat = $hasLinkedChat;
        $this->hasLocation = $hasLocation;
        $this->signMessages = $signMessages;
        $this->joinToSendMessages = $joinToSendMessages;
        $this->joinByRequest = $joinByRequest;
        $this->isSlowModeEnabled = $isSlowModeEnabled;
        $this->isChannel = $isChannel;
        $this->isBroadcastGroup = $isBroadcastGroup;
        $this->isForum = $isForum;
        $this->isVerified = $isVerified;
        $this->restrictionReason = $restrictionReason;
        $this->isScam = $isScam;
        $this->isFake = $isFake;
    }

    public static function fromArray(array $array): Supergroup
    {
        return new static(
            $array['id'],
            (isset($array['usernames']) ? TdSchemaRegistry::fromArray($array['usernames']) : null),
            $array['date'],
            TdSchemaRegistry::fromArray($array['status']),
            $array['member_count'],
            $array['has_linked_chat'],
            $array['has_location'],
            $array['sign_messages'],
            $array['join_to_send_messages'],
            $array['join_by_request'],
            $array['is_slow_mode_enabled'],
            $array['is_channel'],
            $array['is_broadcast_group'],
            $array['is_forum'],
            $array['is_verified'],
            $array['restriction_reason'],
            $array['is_scam'],
            $array['is_fake'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id' => $this->id,
            'usernames' => (isset($this->usernames) ? $this->usernames : null),
            'date' => $this->date,
            'status' => $this->status->typeSerialize(),
            'member_count' => $this->memberCount,
            'has_linked_chat' => $this->hasLinkedChat,
            'has_location' => $this->hasLocation,
            'sign_messages' => $this->signMessages,
            'join_to_send_messages' => $this->joinToSendMessages,
            'join_by_request' => $this->joinByRequest,
            'is_slow_mode_enabled' => $this->isSlowModeEnabled,
            'is_channel' => $this->isChannel,
            'is_broadcast_group' => $this->isBroadcastGroup,
            'is_forum' => $this->isForum,
            'is_verified' => $this->isVerified,
            'restriction_reason' => $this->restrictionReason,
            'is_scam' => $this->isScam,
            'is_fake' => $this->isFake,
        ];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getUsernames(): ?Usernames
    {
        return $this->usernames;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getStatus(): ChatMemberStatus
    {
        return $this->status;
    }

    public function getMemberCount(): int
    {
        return $this->memberCount;
    }

    public function getHasLinkedChat(): bool
    {
        return $this->hasLinkedChat;
    }

    public function getHasLocation(): bool
    {
        return $this->hasLocation;
    }

    public function getSignMessages(): bool
    {
        return $this->signMessages;
    }

    public function getJoinToSendMessages(): bool
    {
        return $this->joinToSendMessages;
    }

    public function getJoinByRequest(): bool
    {
        return $this->joinByRequest;
    }

    public function getIsSlowModeEnabled(): bool
    {
        return $this->isSlowModeEnabled;
    }

    public function getIsChannel(): bool
    {
        return $this->isChannel;
    }

    public function getIsBroadcastGroup(): bool
    {
        return $this->isBroadcastGroup;
    }

    public function getIsForum(): bool
    {
        return $this->isForum;
    }

    public function getIsVerified(): bool
    {
        return $this->isVerified;
    }

    public function getRestrictionReason(): string
    {
        return $this->restrictionReason;
    }

    public function getIsScam(): bool
    {
        return $this->isScam;
    }

    public function getIsFake(): bool
    {
        return $this->isFake;
    }
}

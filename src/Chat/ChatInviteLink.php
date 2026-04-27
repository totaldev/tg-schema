<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\Star\StarSubscriptionPricing;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a chat invite link.
 */
class ChatInviteLink extends TdObject
{
    public const string TYPE_NAME = 'chatInviteLink';

    public function __construct(
        /**
         * True, if the link only creates join request. If true, total number of joining members will be unlimited.
         */
        protected bool                     $createsJoinRequest,
        /**
         * User identifier of an administrator created the link.
         */
        protected int                      $creatorUserId,
        /**
         * Point in time (Unix timestamp) when the link was created.
         */
        protected int                      $date,
        /**
         * Point in time (Unix timestamp) when the link was last edited; 0 if never or unknown.
         */
        protected int                      $editDate,
        /**
         * Point in time (Unix timestamp) when the link will expire; 0 if never.
         */
        protected int                      $expirationDate,
        /**
         * Number of chat members, which joined the chat using the link, but have already left because of expired subscription; for subscription links only.
         */
        protected int                      $expiredMemberCount,
        /**
         * Chat invite link.
         */
        protected string                   $inviteLink,
        /**
         * True, if the link is primary. Primary invite link can't have name, expiration date, or usage limit. There is exactly one primary invite link for each administrator with can_invite_users right at a given time.
         */
        protected bool                     $isPrimary,
        /**
         * True, if the link was revoked.
         */
        protected bool                     $isRevoked,
        /**
         * Number of chat members, which joined the chat using the link.
         */
        protected int                      $memberCount,
        /**
         * The maximum number of members, which can join the chat using the link simultaneously; 0 if not limited. Always 0 if the link requires approval.
         */
        protected int                      $memberLimit,
        /**
         * Name of the link.
         */
        protected string                   $name,
        /**
         * Number of pending join requests created using this link.
         */
        protected int                      $pendingJoinRequestCount,
        /**
         * Information about subscription plan that is applied to the users joining the chat by the link; may be null if the link doesn't require subscription.
         */
        protected ?StarSubscriptionPricing $subscriptionPricing,
    ) {}

    public static function fromArray(array $array): ChatInviteLink
    {
        return new static(
            createsJoinRequest     : $array['creates_join_request'],
            creatorUserId          : $array['creator_user_id'],
            date                   : $array['date'],
            editDate               : $array['edit_date'],
            expirationDate         : $array['expiration_date'],
            expiredMemberCount     : $array['expired_member_count'],
            inviteLink             : $array['invite_link'],
            isPrimary              : $array['is_primary'],
            isRevoked              : $array['is_revoked'],
            memberCount            : $array['member_count'],
            memberLimit            : $array['member_limit'],
            name                   : $array['name'],
            pendingJoinRequestCount: $array['pending_join_request_count'],
            subscriptionPricing    : (isset($array['subscription_pricing']) ? TdSchemaRegistry::fromArray($array['subscription_pricing']) : null),
        );
    }

    public function getCreatesJoinRequest(): bool
    {
        return $this->createsJoinRequest;
    }

    public function getCreatorUserId(): int
    {
        return $this->creatorUserId;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getEditDate(): int
    {
        return $this->editDate;
    }

    public function getExpirationDate(): int
    {
        return $this->expirationDate;
    }

    public function getExpiredMemberCount(): int
    {
        return $this->expiredMemberCount;
    }

    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }

    public function getIsPrimary(): bool
    {
        return $this->isPrimary;
    }

    public function getIsRevoked(): bool
    {
        return $this->isRevoked;
    }

    public function getMemberCount(): int
    {
        return $this->memberCount;
    }

    public function getMemberLimit(): int
    {
        return $this->memberLimit;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPendingJoinRequestCount(): int
    {
        return $this->pendingJoinRequestCount;
    }

    public function getSubscriptionPricing(): ?StarSubscriptionPricing
    {
        return $this->subscriptionPricing;
    }

    public function setCreatesJoinRequest(bool $value): static
    {
        $this->createsJoinRequest = $value;

        return $this;
    }

    public function setCreatorUserId(int $value): static
    {
        $this->creatorUserId = $value;

        return $this;
    }

    public function setDate(int $value): static
    {
        $this->date = $value;

        return $this;
    }

    public function setEditDate(int $value): static
    {
        $this->editDate = $value;

        return $this;
    }

    public function setExpirationDate(int $value): static
    {
        $this->expirationDate = $value;

        return $this;
    }

    public function setExpiredMemberCount(int $value): static
    {
        $this->expiredMemberCount = $value;

        return $this;
    }

    public function setInviteLink(string $value): static
    {
        $this->inviteLink = $value;

        return $this;
    }

    public function setIsPrimary(bool $value): static
    {
        $this->isPrimary = $value;

        return $this;
    }

    public function setIsRevoked(bool $value): static
    {
        $this->isRevoked = $value;

        return $this;
    }

    public function setMemberCount(int $value): static
    {
        $this->memberCount = $value;

        return $this;
    }

    public function setMemberLimit(int $value): static
    {
        $this->memberLimit = $value;

        return $this;
    }

    public function setName(string $value): static
    {
        $this->name = $value;

        return $this;
    }

    public function setPendingJoinRequestCount(int $value): static
    {
        $this->pendingJoinRequestCount = $value;

        return $this;
    }

    public function setSubscriptionPricing(?StarSubscriptionPricing $value): static
    {
        $this->subscriptionPricing = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                      => static::TYPE_NAME,
            'creates_join_request'       => $this->createsJoinRequest,
            'creator_user_id'            => $this->creatorUserId,
            'date'                       => $this->date,
            'edit_date'                  => $this->editDate,
            'expiration_date'            => $this->expirationDate,
            'expired_member_count'       => $this->expiredMemberCount,
            'invite_link'                => $this->inviteLink,
            'is_primary'                 => $this->isPrimary,
            'is_revoked'                 => $this->isRevoked,
            'member_count'               => $this->memberCount,
            'member_limit'               => $this->memberLimit,
            'name'                       => $this->name,
            'pending_join_request_count' => $this->pendingJoinRequestCount,
            'subscription_pricing'       => (null !== $this->subscriptionPricing ? $this->subscriptionPricing->jsonSerialize() : null),
        ];
    }
}

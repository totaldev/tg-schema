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
    public const TYPE_NAME = 'chatInviteLink';

    public function __construct(
        /**
         * Chat invite link.
         */
        protected string                   $inviteLink,
        /**
         * Name of the link.
         */
        protected string                   $name,
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
         * Information about subscription plan that is applied to the users joining the chat by the link; may be null if the link doesn't require subscription.
         */
        protected ?StarSubscriptionPricing $subscriptionPricing,
        /**
         * The maximum number of members, which can join the chat using the link simultaneously; 0 if not limited. Always 0 if the link requires approval.
         */
        protected int                      $memberLimit,
        /**
         * Number of chat members, which joined the chat using the link.
         */
        protected int                      $memberCount,
        /**
         * Number of chat members, which joined the chat using the link, but have already left because of expired subscription; for subscription links only.
         */
        protected int                      $expiredMemberCount,
        /**
         * Number of pending join requests created using this link.
         */
        protected int                      $pendingJoinRequestCount,
        /**
         * True, if the link only creates join request. If true, total number of joining members will be unlimited.
         */
        protected bool                     $createsJoinRequest,
        /**
         * True, if the link is primary. Primary invite link can't have name, expiration date, or usage limit. There is exactly one primary invite link for each administrator with can_invite_users right at a given time.
         */
        protected bool                     $isPrimary,
        /**
         * True, if the link was revoked.
         */
        protected bool                     $isRevoked,
    ) {}

    public static function fromArray(array $array): ChatInviteLink
    {
        return new static(
            $array['invite_link'],
            $array['name'],
            $array['creator_user_id'],
            $array['date'],
            $array['edit_date'],
            $array['expiration_date'],
            isset($array['subscription_pricing']) ? TdSchemaRegistry::fromArray($array['subscription_pricing']) : null,
            $array['member_limit'],
            $array['member_count'],
            $array['expired_member_count'],
            $array['pending_join_request_count'],
            $array['creates_join_request'],
            $array['is_primary'],
            $array['is_revoked'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'                      => static::TYPE_NAME,
            'invite_link'                => $this->inviteLink,
            'name'                       => $this->name,
            'creator_user_id'            => $this->creatorUserId,
            'date'                       => $this->date,
            'edit_date'                  => $this->editDate,
            'expiration_date'            => $this->expirationDate,
            'subscription_pricing'       => (isset($this->subscriptionPricing) ? $this->subscriptionPricing : null),
            'member_limit'               => $this->memberLimit,
            'member_count'               => $this->memberCount,
            'expired_member_count'       => $this->expiredMemberCount,
            'pending_join_request_count' => $this->pendingJoinRequestCount,
            'creates_join_request'       => $this->createsJoinRequest,
            'is_primary'                 => $this->isPrimary,
            'is_revoked'                 => $this->isRevoked,
        ];
    }
}

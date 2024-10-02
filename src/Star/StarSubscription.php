<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about subscription to a channel chat paid in Telegram Stars.
 */
class StarSubscription extends TdObject
{
    public const TYPE_NAME = 'starSubscription';

    public function __construct(
        /**
         * Unique identifier of the subscription.
         */
        protected string                  $id,
        /**
         * Identifier of the channel chat that is subscribed.
         */
        protected int                     $chatId,
        /**
         * Point in time (Unix timestamp) when the subscription will expire or expired.
         */
        protected int                     $expirationDate,
        /**
         * True, if the subscription is active and the user can use the method reuseStarSubscription to join the subscribed chat again.
         */
        protected bool                    $canReuse,
        /**
         * True, if the subscription was canceled.
         */
        protected bool                    $isCanceled,
        /**
         * True, if the subscription expires soon and there are no enough Telegram Stars on the user's balance to extend it.
         */
        protected bool                    $isExpiring,
        /**
         * The invite link that can be used to renew the subscription if it has been expired; may be empty, if the link isn't available anymore.
         */
        protected string                  $inviteLink,
        /**
         * The subscription plan.
         */
        protected StarSubscriptionPricing $pricing,
    ) {}

    public static function fromArray(array $array): StarSubscription
    {
        return new static(
            $array['id'],
            $array['chat_id'],
            $array['expiration_date'],
            $array['can_reuse'],
            $array['is_canceled'],
            $array['is_expiring'],
            $array['invite_link'],
            TdSchemaRegistry::fromArray($array['pricing']),
        );
    }

    public function getCanReuse(): bool
    {
        return $this->canReuse;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getExpirationDate(): int
    {
        return $this->expirationDate;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }

    public function getIsCanceled(): bool
    {
        return $this->isCanceled;
    }

    public function getIsExpiring(): bool
    {
        return $this->isExpiring;
    }

    public function getPricing(): StarSubscriptionPricing
    {
        return $this->pricing;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'id'              => $this->id,
            'chat_id'         => $this->chatId,
            'expiration_date' => $this->expirationDate,
            'can_reuse'       => $this->canReuse,
            'is_canceled'     => $this->isCanceled,
            'is_expiring'     => $this->isExpiring,
            'invite_link'     => $this->inviteLink,
            'pricing'         => $this->pricing->typeSerialize(),
        ];
    }
}

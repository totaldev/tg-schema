<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about subscription to a channel chat, a bot, or a business account that was paid in Telegram Stars.
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
         * Identifier of the chat that is subscribed.
         */
        protected int                     $chatId,
        /**
         * Point in time (Unix timestamp) when the subscription will expire or expired.
         */
        protected int                     $expirationDate,
        /**
         * True, if the subscription was canceled.
         */
        protected bool                    $isCanceled,
        /**
         * True, if the subscription expires soon and there are no enough Telegram Stars on the user's balance to extend it.
         */
        protected bool                    $isExpiring,
        /**
         * The subscription plan.
         */
        protected StarSubscriptionPricing $pricing,
        /**
         * Type of the subscription.
         */
        protected StarSubscriptionType    $type,
    ) {}

    public static function fromArray(array $array): StarSubscription
    {
        return new static(
            $array['id'],
            $array['chat_id'],
            $array['expiration_date'],
            $array['is_canceled'],
            $array['is_expiring'],
            TdSchemaRegistry::fromArray($array['pricing']),
            TdSchemaRegistry::fromArray($array['type']),
        );
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

    public function getType(): StarSubscriptionType
    {
        return $this->type;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'id'              => $this->id,
            'chat_id'         => $this->chatId,
            'expiration_date' => $this->expirationDate,
            'is_canceled'     => $this->isCanceled,
            'is_expiring'     => $this->isExpiring,
            'pricing'         => $this->pricing->typeSerialize(),
            'type'            => $this->type->typeSerialize(),
        ];
    }
}

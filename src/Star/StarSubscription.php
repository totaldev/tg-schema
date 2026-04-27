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
    public const string TYPE_NAME = 'starSubscription';

    public function __construct(
        /**
         * Identifier of the chat that is subscribed.
         */
        protected int                     $chatId,
        /**
         * Point in time (Unix timestamp) when the subscription will expire or expired.
         */
        protected int                     $expirationDate,
        /**
         * Unique identifier of the subscription.
         */
        protected string                  $id,
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
            chatId        : $array['chat_id'],
            expirationDate: $array['expiration_date'],
            id            : $array['id'],
            isCanceled    : $array['is_canceled'],
            isExpiring    : $array['is_expiring'],
            pricing       : TdSchemaRegistry::fromArray($array['pricing']),
            type          : TdSchemaRegistry::fromArray($array['type']),
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

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setExpirationDate(int $value): static
    {
        $this->expirationDate = $value;

        return $this;
    }

    public function setId(string $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setIsCanceled(bool $value): static
    {
        $this->isCanceled = $value;

        return $this;
    }

    public function setIsExpiring(bool $value): static
    {
        $this->isExpiring = $value;

        return $this;
    }

    public function setPricing(StarSubscriptionPricing $value): static
    {
        $this->pricing = $value;

        return $this;
    }

    public function setType(StarSubscriptionType $value): static
    {
        $this->type = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'chat_id'         => $this->chatId,
            'expiration_date' => $this->expirationDate,
            'id'              => $this->id,
            'is_canceled'     => $this->isCanceled,
            'is_expiring'     => $this->isExpiring,
            'pricing'         => $this->pricing->jsonSerialize(),
            'type'            => $this->type->jsonSerialize(),
        ];
    }
}

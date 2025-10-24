<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

/**
 * The transaction is a purchase of a subscription to a channel chat by the current user; for regular users only.
 */
class StarTransactionTypeChannelSubscriptionPurchase extends StarTransactionType
{
    public const string TYPE_NAME = 'starTransactionTypeChannelSubscriptionPurchase';

    public function __construct(
        /**
         * Identifier of the channel chat that created the subscription.
         */
        protected int $chatId,
        /**
         * The number of seconds between consecutive Telegram Star debitings.
         */
        protected int $subscriptionPeriod,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeChannelSubscriptionPurchase
    {
        return new static(
            $array['chat_id'],
            $array['subscription_period'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getSubscriptionPeriod(): int
    {
        return $this->subscriptionPeriod;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setSubscriptionPeriod(int $value): static
    {
        $this->subscriptionPeriod = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'chat_id'             => $this->chatId,
            'subscription_period' => $this->subscriptionPeriod,
        ];
    }
}

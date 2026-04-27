<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

/**
 * The transaction is a sale of a subscription by the channel chat; for channel chats only.
 */
class StarTransactionTypeChannelSubscriptionSale extends StarTransactionType
{
    public const string TYPE_NAME = 'starTransactionTypeChannelSubscriptionSale';

    public function __construct(
        /**
         * The number of seconds between consecutive Telegram Star debitings.
         */
        protected int $subscriptionPeriod,
        /**
         * Identifier of the user that bought the subscription.
         */
        protected int $userId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeChannelSubscriptionSale
    {
        return new static(
            subscriptionPeriod: $array['subscription_period'],
            userId            : $array['user_id'],
        );
    }

    public function getSubscriptionPeriod(): int
    {
        return $this->subscriptionPeriod;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setSubscriptionPeriod(int $value): static
    {
        $this->subscriptionPeriod = $value;

        return $this;
    }

    public function setUserId(int $value): static
    {
        $this->userId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'subscription_period' => $this->subscriptionPeriod,
            'user_id'             => $this->userId,
        ];
    }
}

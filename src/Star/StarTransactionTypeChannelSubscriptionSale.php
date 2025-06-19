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
    public const TYPE_NAME = 'starTransactionTypeChannelSubscriptionSale';

    public function __construct(
        /**
         * Identifier of the user that bought the subscription.
         */
        protected int $userId,
        /**
         * The number of seconds between consecutive Telegram Star debitings.
         */
        protected int $subscriptionPeriod
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeChannelSubscriptionSale
    {
        return new static(
            $array['user_id'],
            $array['subscription_period'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'user_id'             => $this->userId,
            'subscription_period' => $this->subscriptionPeriod,
        ];
    }
}

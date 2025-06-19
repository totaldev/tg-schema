<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\Product\ProductInfo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The transaction is a purchase of a subscription from a bot or a business account by the current user; for regular users only.
 */
class StarTransactionTypeBotSubscriptionPurchase extends StarTransactionType
{
    public const TYPE_NAME = 'starTransactionTypeBotSubscriptionPurchase';

    public function __construct(
        /**
         * Identifier of the bot or the business account user that created the subscription link.
         */
        protected int         $userId,
        /**
         * The number of seconds between consecutive Telegram Star debitings.
         */
        protected int         $subscriptionPeriod,
        /**
         * Information about the bought subscription.
         */
        protected ProductInfo $productInfo
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeBotSubscriptionPurchase
    {
        return new static(
            $array['user_id'],
            $array['subscription_period'],
            TdSchemaRegistry::fromArray($array['product_info']),
        );
    }

    public function getProductInfo(): ProductInfo
    {
        return $this->productInfo;
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
            'product_info'        => $this->productInfo->typeSerialize(),
        ];
    }
}

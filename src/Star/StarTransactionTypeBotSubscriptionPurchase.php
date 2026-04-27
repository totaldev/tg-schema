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
    public const string TYPE_NAME = 'starTransactionTypeBotSubscriptionPurchase';

    public function __construct(
        /**
         * Information about the bought subscription.
         */
        protected ProductInfo $productInfo,
        /**
         * The number of seconds between consecutive Telegram Star debitings.
         */
        protected int         $subscriptionPeriod,
        /**
         * Identifier of the bot or the business account user that created the subscription link.
         */
        protected int         $userId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeBotSubscriptionPurchase
    {
        return new static(
            productInfo       : TdSchemaRegistry::fromArray($array['product_info']),
            subscriptionPeriod: $array['subscription_period'],
            userId            : $array['user_id'],
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

    public function setProductInfo(ProductInfo $value): static
    {
        $this->productInfo = $value;

        return $this;
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
            'product_info'        => $this->productInfo->jsonSerialize(),
            'subscription_period' => $this->subscriptionPeriod,
            'user_id'             => $this->userId,
        ];
    }
}

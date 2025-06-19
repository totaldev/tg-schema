<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\Affiliate\AffiliateInfo;
use Totaldev\TgSchema\Product\ProductInfo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The transaction is a sale of a subscription by the bot; for bots only.
 */
class StarTransactionTypeBotSubscriptionSale extends StarTransactionType
{
    public const TYPE_NAME = 'starTransactionTypeBotSubscriptionSale';

    public function __construct(
        /**
         * Identifier of the user that bought the subscription.
         */
        protected int            $userId,
        /**
         * The number of seconds between consecutive Telegram Star debitings.
         */
        protected int            $subscriptionPeriod,
        /**
         * Information about the bought subscription.
         */
        protected ProductInfo    $productInfo,
        /**
         * Invoice payload.
         */
        protected string         $invoicePayload,
        /**
         * Information about the affiliate which received commission from the transaction; may be null if none.
         */
        protected ?AffiliateInfo $affiliate,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeBotSubscriptionSale
    {
        return new static(
            $array['user_id'],
            $array['subscription_period'],
            TdSchemaRegistry::fromArray($array['product_info']),
            $array['invoice_payload'],
            isset($array['affiliate']) ? TdSchemaRegistry::fromArray($array['affiliate']) : null,
        );
    }

    public function getAffiliate(): ?AffiliateInfo
    {
        return $this->affiliate;
    }

    public function getInvoicePayload(): string
    {
        return $this->invoicePayload;
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
            'invoice_payload'     => $this->invoicePayload,
            'affiliate'           => (isset($this->affiliate) ? $this->affiliate : null),
        ];
    }
}

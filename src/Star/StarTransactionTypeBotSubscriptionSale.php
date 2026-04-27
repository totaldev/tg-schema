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
    public const string TYPE_NAME = 'starTransactionTypeBotSubscriptionSale';

    public function __construct(
        /**
         * Information about the affiliate which received commission from the transaction; may be null if none.
         */
        protected ?AffiliateInfo $affiliate,
        /**
         * Invoice payload.
         */
        protected string         $invoicePayload,
        /**
         * Information about the bought subscription.
         */
        protected ProductInfo    $productInfo,
        /**
         * The number of seconds between consecutive Telegram Star debitings.
         */
        protected int            $subscriptionPeriod,
        /**
         * Identifier of the user that bought the subscription.
         */
        protected int            $userId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeBotSubscriptionSale
    {
        return new static(
            affiliate         : (isset($array['affiliate']) ? TdSchemaRegistry::fromArray($array['affiliate']) : null),
            invoicePayload    : $array['invoice_payload'],
            productInfo       : TdSchemaRegistry::fromArray($array['product_info']),
            subscriptionPeriod: $array['subscription_period'],
            userId            : $array['user_id'],
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

    public function setAffiliate(?AffiliateInfo $value): static
    {
        $this->affiliate = $value;

        return $this;
    }

    public function setInvoicePayload(string $value): static
    {
        $this->invoicePayload = $value;

        return $this;
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
            'affiliate'           => (null !== $this->affiliate ? $this->affiliate->jsonSerialize() : null),
            'invoice_payload'     => $this->invoicePayload,
            'product_info'        => $this->productInfo->jsonSerialize(),
            'subscription_period' => $this->subscriptionPeriod,
            'user_id'             => $this->userId,
        ];
    }
}

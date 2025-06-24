<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\Affiliate\AffiliateInfo;
use Totaldev\TgSchema\Product\ProductInfo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The transaction is a sale of a product by the bot; for bots only.
 */
class StarTransactionTypeBotInvoiceSale extends StarTransactionType
{
    public const TYPE_NAME = 'starTransactionTypeBotInvoiceSale';

    public function __construct(
        /**
         * Identifier of the user that bought the product.
         */
        protected int            $userId,
        /**
         * Information about the bought product.
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

    public static function fromArray(array $array): StarTransactionTypeBotInvoiceSale
    {
        return new static(
            $array['user_id'],
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

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'user_id'         => $this->userId,
            'product_info'    => $this->productInfo->typeSerialize(),
            'invoice_payload' => $this->invoicePayload,
            'affiliate'       => $this->affiliate ?? null,
        ];
    }
}

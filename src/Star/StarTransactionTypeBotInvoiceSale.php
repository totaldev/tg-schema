<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\Affiliate\AffiliateInfo;
use Totaldev\TgSchema\Product\ProductInfo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The transaction is a sale of a product by the bot; relevant for bots only.
 */
class StarTransactionTypeBotInvoiceSale extends StarTransactionType
{
    public const string TYPE_NAME = 'starTransactionTypeBotInvoiceSale';

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
         * Information about the bought product.
         */
        protected ProductInfo    $productInfo,
        /**
         * Identifier of the user who bought the product.
         */
        protected int            $userId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeBotInvoiceSale
    {
        return new static(
            affiliate     : (isset($array['affiliate']) ? TdSchemaRegistry::fromArray($array['affiliate']) : null),
            invoicePayload: $array['invoice_payload'],
            productInfo   : TdSchemaRegistry::fromArray($array['product_info']),
            userId        : $array['user_id'],
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

    public function setUserId(int $value): static
    {
        $this->userId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'affiliate'       => (null !== $this->affiliate ? $this->affiliate->jsonSerialize() : null),
            'invoice_payload' => $this->invoicePayload,
            'product_info'    => $this->productInfo->jsonSerialize(),
            'user_id'         => $this->userId,
        ];
    }
}

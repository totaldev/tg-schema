<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\Product\ProductInfo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The transaction is a purchase of a product from a bot or a business account by the current user; for regular users only.
 */
class StarTransactionTypeBotInvoicePurchase extends StarTransactionType
{
    public const string TYPE_NAME = 'starTransactionTypeBotInvoicePurchase';

    public function __construct(
        /**
         * Information about the bought product.
         */
        protected ProductInfo $productInfo,
        /**
         * Identifier of the bot or the business account user that created the invoice.
         */
        protected int         $userId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeBotInvoicePurchase
    {
        return new static(
            productInfo: TdSchemaRegistry::fromArray($array['product_info']),
            userId     : $array['user_id'],
        );
    }

    public function getProductInfo(): ProductInfo
    {
        return $this->productInfo;
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

    public function setUserId(int $value): static
    {
        $this->userId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'product_info' => $this->productInfo->jsonSerialize(),
            'user_id'      => $this->userId,
        ];
    }
}

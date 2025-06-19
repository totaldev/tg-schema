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
    public const TYPE_NAME = 'starTransactionTypeBotInvoicePurchase';

    public function __construct(
        /**
         * Identifier of the bot or the business account user that created the invoice.
         */
        protected int         $userId,
        /**
         * Information about the bought product.
         */
        protected ProductInfo $productInfo
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeBotInvoicePurchase
    {
        return new static(
            $array['user_id'],
            TdSchemaRegistry::fromArray($array['product_info']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'user_id'      => $this->userId,
            'product_info' => $this->productInfo->typeSerialize(),
        ];
    }
}

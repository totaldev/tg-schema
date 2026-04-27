<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Payment;

use Totaldev\TgSchema\Product\ProductInfo;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about a successful payment.
 */
class PaymentReceipt extends TdObject
{
    public const string TYPE_NAME = 'paymentReceipt';

    public function __construct(
        /**
         * Point in time (Unix timestamp) when the payment was made.
         */
        protected int                $date,
        /**
         * Information about the product.
         */
        protected ProductInfo        $productInfo,
        /**
         * User identifier of the seller bot.
         */
        protected int                $sellerBotUserId,
        /**
         * Type of the payment receipt.
         */
        protected PaymentReceiptType $type,
    ) {}

    public static function fromArray(array $array): PaymentReceipt
    {
        return new static(
            date           : $array['date'],
            productInfo    : TdSchemaRegistry::fromArray($array['product_info']),
            sellerBotUserId: $array['seller_bot_user_id'],
            type           : TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getProductInfo(): ProductInfo
    {
        return $this->productInfo;
    }

    public function getSellerBotUserId(): int
    {
        return $this->sellerBotUserId;
    }

    public function getType(): PaymentReceiptType
    {
        return $this->type;
    }

    public function setDate(int $value): static
    {
        $this->date = $value;

        return $this;
    }

    public function setProductInfo(ProductInfo $value): static
    {
        $this->productInfo = $value;

        return $this;
    }

    public function setSellerBotUserId(int $value): static
    {
        $this->sellerBotUserId = $value;

        return $this;
    }

    public function setType(PaymentReceiptType $value): static
    {
        $this->type = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'date'               => $this->date,
            'product_info'       => $this->productInfo->jsonSerialize(),
            'seller_bot_user_id' => $this->sellerBotUserId,
            'type'               => $this->type->jsonSerialize(),
        ];
    }
}

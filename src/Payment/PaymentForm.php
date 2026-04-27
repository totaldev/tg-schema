<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Payment;

use Totaldev\TgSchema\Product\ProductInfo;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about an invoice payment form.
 */
class PaymentForm extends TdObject
{
    public const string TYPE_NAME = 'paymentForm';

    public function __construct(
        /**
         * The payment form identifier.
         */
        protected int             $id,
        /**
         * Information about the product.
         */
        protected ProductInfo     $productInfo,
        /**
         * User identifier of the seller bot.
         */
        protected int             $sellerBotUserId,
        /**
         * Type of the payment form.
         */
        protected PaymentFormType $type,
    ) {}

    public static function fromArray(array $array): PaymentForm
    {
        return new static(
            id             : $array['id'],
            productInfo    : TdSchemaRegistry::fromArray($array['product_info']),
            sellerBotUserId: $array['seller_bot_user_id'],
            type           : TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getProductInfo(): ProductInfo
    {
        return $this->productInfo;
    }

    public function getSellerBotUserId(): int
    {
        return $this->sellerBotUserId;
    }

    public function getType(): PaymentFormType
    {
        return $this->type;
    }

    public function setId(int $value): static
    {
        $this->id = $value;

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

    public function setType(PaymentFormType $value): static
    {
        $this->type = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'id'                 => $this->id,
            'product_info'       => $this->productInfo->jsonSerialize(),
            'seller_bot_user_id' => $this->sellerBotUserId,
            'type'               => $this->type->jsonSerialize(),
        ];
    }
}

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
    public const TYPE_NAME = 'paymentForm';

    public function __construct(
        /**
         * The payment form identifier.
         */
        protected int             $id,
        /**
         * Type of the payment form.
         */
        protected PaymentFormType $type,
        /**
         * User identifier of the seller bot.
         */
        protected int             $sellerBotUserId,
        /**
         * Information about the product.
         */
        protected ProductInfo     $productInfo,
    ) {}

    public static function fromArray(array $array): PaymentForm
    {
        return new static(
            $array['id'],
            TdSchemaRegistry::fromArray($array['type']),
            $array['seller_bot_user_id'],
            TdSchemaRegistry::fromArray($array['product_info']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'id'                 => $this->id,
            'type'               => $this->type->typeSerialize(),
            'seller_bot_user_id' => $this->sellerBotUserId,
            'product_info'       => $this->productInfo->typeSerialize(),
        ];
    }
}

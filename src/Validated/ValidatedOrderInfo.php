<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Validated;

use Totaldev\TgSchema\Shipping\ShippingOption;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a temporary identifier of validated order information, which is stored for one hour, and the available shipping options.
 */
class ValidatedOrderInfo extends TdObject
{
    public const TYPE_NAME = 'validatedOrderInfo';

    public function __construct(
        /**
         * Temporary identifier of the order information.
         */
        protected string $orderInfoId,
        /**
         * Available shipping options.
         *
         * @var ShippingOption[]
         */
        protected array  $shippingOptions
    ) {}

    public static function fromArray(array $array): ValidatedOrderInfo
    {
        return new static(
            $array['order_info_id'],
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['shipping_options']),
        );
    }

    public function getOrderInfoId(): string
    {
        return $this->orderInfoId;
    }

    public function getShippingOptions(): array
    {
        return $this->shippingOptions;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'order_info_id' => $this->orderInfoId,
            array_map(static fn($x) => $x->typeSerialize(), $this->shippingOptions),
        ];
    }
}

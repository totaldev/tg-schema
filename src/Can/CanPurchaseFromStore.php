<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Can;

use Totaldev\TgSchema\Store\StorePaymentPurpose;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Checks whether an in-store purchase is possible. Must be called before any in-store purchase.
 */
class CanPurchaseFromStore extends TdFunction
{
    public const TYPE_NAME = 'canPurchaseFromStore';

    public function __construct(
        /**
         * Transaction purpose.
         */
        protected StorePaymentPurpose $purpose
    ) {}

    public static function fromArray(array $array): CanPurchaseFromStore
    {
        return new static(
            TdSchemaRegistry::fromArray($array['purpose']),
        );
    }

    public function getPurpose(): StorePaymentPurpose
    {
        return $this->purpose;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'purpose' => $this->purpose->typeSerialize(),
        ];
    }
}

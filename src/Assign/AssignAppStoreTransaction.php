<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Assign;

use Totaldev\TgSchema\Store\StorePaymentPurpose;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Informs server about a purchase through App Store. For official applications only.
 */
class AssignAppStoreTransaction extends TdFunction
{
    public const TYPE_NAME = 'assignAppStoreTransaction';

    public function __construct(
        /**
         * App Store receipt.
         */
        protected string              $receipt,
        /**
         * Transaction purpose.
         */
        protected StorePaymentPurpose $purpose,
    ) {}

    public static function fromArray(array $array): AssignAppStoreTransaction
    {
        return new static(
            $array['receipt'],
            TdSchemaRegistry::fromArray($array['purpose']),
        );
    }

    public function getPurpose(): StorePaymentPurpose
    {
        return $this->purpose;
    }

    public function getReceipt(): string
    {
        return $this->receipt;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'receipt' => $this->receipt,
            'purpose' => $this->purpose->typeSerialize(),
        ];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Assign;

use Totaldev\TgSchema\Store\StorePaymentPurpose;
use Totaldev\TgSchema\Store\StoreTransaction;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Informs server about an in-store purchase. For official applications only.
 */
class AssignStoreTransaction extends TdFunction
{
    public const TYPE_NAME = 'assignStoreTransaction';

    public function __construct(
        /**
         * Information about the transaction.
         */
        protected StoreTransaction    $transaction,
        /**
         * Transaction purpose.
         */
        protected StorePaymentPurpose $purpose
    ) {}

    public static function fromArray(array $array): AssignStoreTransaction
    {
        return new static(
            TdSchemaRegistry::fromArray($array['transaction']),
            TdSchemaRegistry::fromArray($array['purpose']),
        );
    }

    public function getPurpose(): StorePaymentPurpose
    {
        return $this->purpose;
    }

    public function getTransaction(): StoreTransaction
    {
        return $this->transaction;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'transaction' => $this->transaction->typeSerialize(),
            'purpose'     => $this->purpose->typeSerialize(),
        ];
    }
}

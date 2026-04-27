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
    public const string TYPE_NAME = 'assignStoreTransaction';

    public function __construct(
        /**
         * Transaction purpose.
         */
        protected StorePaymentPurpose $purpose,
        /**
         * Information about the transaction.
         */
        protected StoreTransaction    $transaction,
    ) {}

    public static function fromArray(array $array): AssignStoreTransaction
    {
        return new static(
            purpose    : TdSchemaRegistry::fromArray($array['purpose']),
            transaction: TdSchemaRegistry::fromArray($array['transaction']),
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

    public function setPurpose(StorePaymentPurpose $value): static
    {
        $this->purpose = $value;

        return $this;
    }

    public function setTransaction(StoreTransaction $value): static
    {
        $this->transaction = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'purpose'     => $this->purpose->jsonSerialize(),
            'transaction' => $this->transaction->jsonSerialize(),
        ];
    }
}

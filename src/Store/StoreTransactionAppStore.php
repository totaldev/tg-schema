<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Store;

/**
 * A purchase through App Store.
 */
class StoreTransactionAppStore extends StoreTransaction
{
    public const string TYPE_NAME = 'storeTransactionAppStore';

    public function __construct(
        /**
         * App Store receipt.
         */
        protected string $receipt
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StoreTransactionAppStore
    {
        return new static(
            receipt: $array['receipt'],
        );
    }

    public function getReceipt(): string
    {
        return $this->receipt;
    }

    public function setReceipt(string $value): static
    {
        $this->receipt = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'receipt' => $this->receipt,
        ];
    }
}

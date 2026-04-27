<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Store\StoreTransaction;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Informs server about an in-store purchase of Telegram Premium before authorization. Works only when the current authorization state is
 * authorizationStateWaitPremiumPurchase.
 */
class SetAuthenticationPremiumPurchaseTransaction extends TdFunction
{
    public const string TYPE_NAME = 'setAuthenticationPremiumPurchaseTransaction';

    public function __construct(
        /**
         * Paid amount, in the smallest units of the currency.
         */
        protected int              $amount,
        /**
         * ISO 4217 currency code of the payment currency.
         */
        protected string           $currency,
        /**
         * Pass true if this is a restore of a Telegram Premium purchase; only for App Store.
         */
        protected bool             $isRestore,
        /**
         * Information about the transaction.
         */
        protected StoreTransaction $transaction,
    ) {}

    public static function fromArray(array $array): SetAuthenticationPremiumPurchaseTransaction
    {
        return new static(
            amount     : $array['amount'],
            currency   : $array['currency'],
            isRestore  : $array['is_restore'],
            transaction: TdSchemaRegistry::fromArray($array['transaction']),
        );
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getIsRestore(): bool
    {
        return $this->isRestore;
    }

    public function getTransaction(): StoreTransaction
    {
        return $this->transaction;
    }

    public function setAmount(int $value): static
    {
        $this->amount = $value;

        return $this;
    }

    public function setCurrency(string $value): static
    {
        $this->currency = $value;

        return $this;
    }

    public function setIsRestore(bool $value): static
    {
        $this->isRestore = $value;

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
            'amount'      => $this->amount,
            'currency'    => $this->currency,
            'is_restore'  => $this->isRestore,
            'transaction' => $this->transaction->jsonSerialize(),
        ];
    }
}

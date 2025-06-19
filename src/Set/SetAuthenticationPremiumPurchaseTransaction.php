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
    public const TYPE_NAME = 'setAuthenticationPremiumPurchaseTransaction';

    public function __construct(
        /**
         * Information about the transaction.
         */
        protected StoreTransaction $transaction,
        /**
         * Pass true if this is a restore of a Telegram Premium purchase; only for App Store.
         */
        protected bool             $isRestore,
        /**
         * ISO 4217 currency code of the payment currency.
         */
        protected string           $currency,
        /**
         * Paid amount, in the smallest units of the currency.
         */
        protected int              $amount
    ) {}

    public static function fromArray(array $array): SetAuthenticationPremiumPurchaseTransaction
    {
        return new static(
            TdSchemaRegistry::fromArray($array['transaction']),
            $array['is_restore'],
            $array['currency'],
            $array['amount'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'transaction' => $this->transaction->typeSerialize(),
            'is_restore'  => $this->isRestore,
            'currency'    => $this->currency,
            'amount'      => $this->amount,
        ];
    }
}

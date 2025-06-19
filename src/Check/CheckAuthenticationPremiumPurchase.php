<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Check;

use Totaldev\TgSchema\TdFunction;

/**
 * Checks whether an in-store purchase of Telegram Premium is possible before authorization. Works only when the current authorization state is
 * authorizationStateWaitPremiumPurchase.
 */
class CheckAuthenticationPremiumPurchase extends TdFunction
{
    public const TYPE_NAME = 'checkAuthenticationPremiumPurchase';

    public function __construct(
        /**
         * ISO 4217 currency code of the payment currency.
         */
        protected string $currency,
        /**
         * Paid amount, in the smallest units of the currency.
         */
        protected int    $amount
    ) {}

    public static function fromArray(array $array): CheckAuthenticationPremiumPurchase
    {
        return new static(
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

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'currency' => $this->currency,
            'amount'   => $this->amount,
        ];
    }
}

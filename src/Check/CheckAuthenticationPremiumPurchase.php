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
    public const string TYPE_NAME = 'checkAuthenticationPremiumPurchase';

    public function __construct(
        /**
         * Paid amount, in the smallest units of the currency.
         */
        protected int    $amount,
        /**
         * ISO 4217 currency code of the payment currency.
         */
        protected string $currency,
    ) {}

    public static function fromArray(array $array): CheckAuthenticationPremiumPurchase
    {
        return new static(
            amount  : $array['amount'],
            currency: $array['currency'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'amount'   => $this->amount,
            'currency' => $this->currency,
        ];
    }
}

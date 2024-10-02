<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Store;

/**
 * The user gifting Telegram Premium to another user.
 */
class StorePaymentPurposeGiftedPremium extends StorePaymentPurpose
{
    public const TYPE_NAME = 'storePaymentPurposeGiftedPremium';

    public function __construct(
        /**
         * Identifier of the user to which Telegram Premium is gifted.
         */
        protected int    $userId,
        /**
         * ISO 4217 currency code of the payment currency.
         */
        protected string $currency,
        /**
         * Paid amount, in the smallest units of the currency.
         */
        protected int    $amount,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StorePaymentPurposeGiftedPremium
    {
        return new static(
            $array['user_id'],
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

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'user_id'  => $this->userId,
            'currency' => $this->currency,
            'amount'   => $this->amount,
        ];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Store;

/**
 * The user buying Telegram Stars for other users.
 */
class StorePaymentPurposeGiftedStars extends StorePaymentPurpose
{
    public const TYPE_NAME = 'storePaymentPurposeGiftedStars';

    public function __construct(
        /**
         * Identifier of the user to which Telegram Stars are gifted.
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
        /**
         * Number of bought Telegram Stars.
         */
        protected int    $starCount
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StorePaymentPurposeGiftedStars
    {
        return new static(
            $array['user_id'],
            $array['currency'],
            $array['amount'],
            $array['star_count'],
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

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'user_id'    => $this->userId,
            'currency'   => $this->currency,
            'amount'     => $this->amount,
            'star_count' => $this->starCount,
        ];
    }
}

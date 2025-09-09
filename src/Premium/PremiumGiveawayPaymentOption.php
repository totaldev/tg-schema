<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

use Totaldev\TgSchema\TdObject;

/**
 * Describes an option for creating of Telegram Premium giveaway or manual distribution of Telegram Premium among chat members. Use
 * telegramPaymentPurposePremiumGiftCodes or telegramPaymentPurposePremiumGiveaway for out-of-store payments.
 */
class PremiumGiveawayPaymentOption extends TdObject
{
    public const TYPE_NAME = 'premiumGiveawayPaymentOption';

    public function __construct(
        /**
         * ISO 4217 currency code for Telegram Premium gift code payment.
         */
        protected string $currency,
        /**
         * The amount to pay, in the smallest units of the currency.
         */
        protected int    $amount,
        /**
         * Number of users which will be able to activate the gift codes.
         */
        protected int    $winnerCount,
        /**
         * Number of months the Telegram Premium subscription will be active.
         */
        protected int    $monthCount,
        /**
         * Identifier of the store product associated with the option; may be empty if none.
         */
        protected string $storeProductId,
        /**
         * Number of times the store product must be paid.
         */
        protected int    $storeProductQuantity,
    ) {}

    public static function fromArray(array $array): PremiumGiveawayPaymentOption
    {
        return new static(
            $array['currency'],
            $array['amount'],
            $array['winner_count'],
            $array['month_count'],
            $array['store_product_id'],
            $array['store_product_quantity'],
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

    public function getMonthCount(): int
    {
        return $this->monthCount;
    }

    public function getStoreProductId(): string
    {
        return $this->storeProductId;
    }

    public function getStoreProductQuantity(): int
    {
        return $this->storeProductQuantity;
    }

    public function getWinnerCount(): int
    {
        return $this->winnerCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'currency'               => $this->currency,
            'amount'                 => $this->amount,
            'winner_count'           => $this->winnerCount,
            'month_count'            => $this->monthCount,
            'store_product_id'       => $this->storeProductId,
            'store_product_quantity' => $this->storeProductQuantity,
        ];
    }
}

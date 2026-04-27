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
    public const string TYPE_NAME = 'premiumGiveawayPaymentOption';

    public function __construct(
        /**
         * The amount to pay, in the smallest units of the currency.
         */
        protected int    $amount,
        /**
         * ISO 4217 currency code for Telegram Premium gift code payment.
         */
        protected string $currency,
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
        /**
         * Number of users which will be able to activate the gift codes.
         */
        protected int    $winnerCount,
    ) {}

    public static function fromArray(array $array): PremiumGiveawayPaymentOption
    {
        return new static(
            amount              : $array['amount'],
            currency            : $array['currency'],
            monthCount          : $array['month_count'],
            storeProductId      : $array['store_product_id'],
            storeProductQuantity: $array['store_product_quantity'],
            winnerCount         : $array['winner_count'],
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

    public function setMonthCount(int $value): static
    {
        $this->monthCount = $value;

        return $this;
    }

    public function setStoreProductId(string $value): static
    {
        $this->storeProductId = $value;

        return $this;
    }

    public function setStoreProductQuantity(int $value): static
    {
        $this->storeProductQuantity = $value;

        return $this;
    }

    public function setWinnerCount(int $value): static
    {
        $this->winnerCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'amount'                 => $this->amount,
            'currency'               => $this->currency,
            'month_count'            => $this->monthCount,
            'store_product_id'       => $this->storeProductId,
            'store_product_quantity' => $this->storeProductQuantity,
            'winner_count'           => $this->winnerCount,
        ];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\TdObject;

/**
 * Describes an option for buying Telegram Stars. Use telegramPaymentPurposeStars for out-of-store payments.
 */
class StarPaymentOption extends TdObject
{
    public const string TYPE_NAME = 'starPaymentOption';

    public function __construct(
        /**
         * ISO 4217 currency code for the payment.
         */
        protected string $currency,
        /**
         * The amount to pay, in the smallest units of the currency.
         */
        protected int    $amount,
        /**
         * Number of Telegram Stars that will be purchased.
         */
        protected int    $starCount,
        /**
         * Identifier of the store product associated with the option; may be empty if none.
         */
        protected string $storeProductId,
        /**
         * True, if the option must be shown only in the full list of payment options.
         */
        protected bool   $isAdditional,
    ) {}

    public static function fromArray(array $array): StarPaymentOption
    {
        return new static(
            $array['currency'],
            $array['amount'],
            $array['star_count'],
            $array['store_product_id'],
            $array['is_additional'],
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

    public function getIsAdditional(): bool
    {
        return $this->isAdditional;
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function getStoreProductId(): string
    {
        return $this->storeProductId;
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

    public function setIsAdditional(bool $value): static
    {
        $this->isAdditional = $value;

        return $this;
    }

    public function setStarCount(int $value): static
    {
        $this->starCount = $value;

        return $this;
    }

    public function setStoreProductId(string $value): static
    {
        $this->storeProductId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'currency'         => $this->currency,
            'amount'           => $this->amount,
            'star_count'       => $this->starCount,
            'store_product_id' => $this->storeProductId,
            'is_additional'    => $this->isAdditional,
        ];
    }
}

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
         * The amount to pay, in the smallest units of the currency.
         */
        protected int    $amount,
        /**
         * ISO 4217 currency code for the payment.
         */
        protected string $currency,
        /**
         * True, if the option must be shown only in the full list of payment options.
         */
        protected bool   $isAdditional,
        /**
         * Number of Telegram Stars that will be purchased.
         */
        protected int    $starCount,
        /**
         * Identifier of the store product associated with the option; may be empty if none.
         */
        protected string $storeProductId,
    ) {}

    public static function fromArray(array $array): StarPaymentOption
    {
        return new static(
            amount        : $array['amount'],
            currency      : $array['currency'],
            isAdditional  : $array['is_additional'],
            starCount     : $array['star_count'],
            storeProductId: $array['store_product_id'],
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
            'amount'           => $this->amount,
            'currency'         => $this->currency,
            'is_additional'    => $this->isAdditional,
            'star_count'       => $this->starCount,
            'store_product_id' => $this->storeProductId,
        ];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

use Totaldev\TgSchema\Sticker\Sticker;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes an option for gifting Telegram Premium to a user. Use telegramPaymentPurposePremiumGift for out-of-store payments or payments in Telegram Stars.
 */
class PremiumGiftPaymentOption extends TdObject
{
    public const string TYPE_NAME = 'premiumGiftPaymentOption';

    public function __construct(
        /**
         * The amount to pay, in the smallest units of the currency.
         */
        protected int      $amount,
        /**
         * ISO 4217 currency code for the payment.
         */
        protected string   $currency,
        /**
         * The discount associated with this option, as a percentage.
         */
        protected int      $discountPercentage,
        /**
         * Number of months the Telegram Premium subscription will be active.
         */
        protected int      $monthCount,
        /**
         * The alternative amount of Telegram Stars to pay; 0 if payment in Telegram Stars is not possible.
         */
        protected int      $starCount,
        /**
         * A sticker to be shown along with the option; may be null if unknown.
         */
        protected ?Sticker $sticker,
        /**
         * Identifier of the store product associated with the option.
         */
        protected string   $storeProductId,
    ) {}

    public static function fromArray(array $array): PremiumGiftPaymentOption
    {
        return new static(
            amount            : $array['amount'],
            currency          : $array['currency'],
            discountPercentage: $array['discount_percentage'],
            monthCount        : $array['month_count'],
            starCount         : $array['star_count'],
            sticker           : (isset($array['sticker']) ? TdSchemaRegistry::fromArray($array['sticker']) : null),
            storeProductId    : $array['store_product_id'],
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

    public function getDiscountPercentage(): int
    {
        return $this->discountPercentage;
    }

    public function getMonthCount(): int
    {
        return $this->monthCount;
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function getSticker(): ?Sticker
    {
        return $this->sticker;
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

    public function setDiscountPercentage(int $value): static
    {
        $this->discountPercentage = $value;

        return $this;
    }

    public function setMonthCount(int $value): static
    {
        $this->monthCount = $value;

        return $this;
    }

    public function setStarCount(int $value): static
    {
        $this->starCount = $value;

        return $this;
    }

    public function setSticker(?Sticker $value): static
    {
        $this->sticker = $value;

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
            '@type'               => static::TYPE_NAME,
            'amount'              => $this->amount,
            'currency'            => $this->currency,
            'discount_percentage' => $this->discountPercentage,
            'month_count'         => $this->monthCount,
            'star_count'          => $this->starCount,
            'sticker'             => (null !== $this->sticker ? $this->sticker->jsonSerialize() : null),
            'store_product_id'    => $this->storeProductId,
        ];
    }
}

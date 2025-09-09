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
    public const TYPE_NAME = 'premiumGiftPaymentOption';

    public function __construct(
        /**
         * ISO 4217 currency code for the payment.
         */
        protected string   $currency,
        /**
         * The amount to pay, in the smallest units of the currency.
         */
        protected int      $amount,
        /**
         * The alternative amount of Telegram Stars to pay; 0 if payment in Telegram Stars is not possible.
         */
        protected int      $starCount,
        /**
         * The discount associated with this option, as a percentage.
         */
        protected int      $discountPercentage,
        /**
         * Number of months the Telegram Premium subscription will be active.
         */
        protected int      $monthCount,
        /**
         * Identifier of the store product associated with the option.
         */
        protected string   $storeProductId,
        /**
         * A sticker to be shown along with the option; may be null if unknown.
         */
        protected ?Sticker $sticker,
    ) {}

    public static function fromArray(array $array): PremiumGiftPaymentOption
    {
        return new static(
            $array['currency'],
            $array['amount'],
            $array['star_count'],
            $array['discount_percentage'],
            $array['month_count'],
            $array['store_product_id'],
            isset($array['sticker']) ? TdSchemaRegistry::fromArray($array['sticker']) : null,
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

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'currency'            => $this->currency,
            'amount'              => $this->amount,
            'star_count'          => $this->starCount,
            'discount_percentage' => $this->discountPercentage,
            'month_count'         => $this->monthCount,
            'store_product_id'    => $this->storeProductId,
            'sticker'             => $this->sticker ?? null,
        ];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

use Totaldev\TgSchema\Internal\InternalLinkType;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes an option for buying Telegram Premium to a user.
 */
class PremiumPaymentOption extends TdObject
{
    public const TYPE_NAME = 'premiumPaymentOption';

    public function __construct(
        /**
         * ISO 4217 currency code for Telegram Premium subscription payment.
         */
        protected string            $currency,
        /**
         * The amount to pay, in the smallest units of the currency.
         */
        protected int               $amount,
        /**
         * The discount associated with this option, as a percentage.
         */
        protected int               $discountPercentage,
        /**
         * Number of months the Telegram Premium subscription will be active. Use getPremiumInfoSticker to get the sticker to be used as representation of the Telegram Premium subscription.
         */
        protected int               $monthCount,
        /**
         * Identifier of the store product associated with the option.
         */
        protected string            $storeProductId,
        /**
         * An internal link to be opened for buying Telegram Premium to the user if store payment isn't possible; may be null if direct payment isn't available.
         */
        protected ?InternalLinkType $paymentLink,
    ) {}

    public static function fromArray(array $array): PremiumPaymentOption
    {
        return new static(
            $array['currency'],
            $array['amount'],
            $array['discount_percentage'],
            $array['month_count'],
            $array['store_product_id'],
            isset($array['payment_link']) ? TdSchemaRegistry::fromArray($array['payment_link']) : null,
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

    public function getPaymentLink(): ?InternalLinkType
    {
        return $this->paymentLink;
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
            'discount_percentage' => $this->discountPercentage,
            'month_count'         => $this->monthCount,
            'store_product_id'    => $this->storeProductId,
            'payment_link'        => $this->paymentLink ?? null,
        ];
    }
}

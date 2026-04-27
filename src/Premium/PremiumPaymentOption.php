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
    public const string TYPE_NAME = 'premiumPaymentOption';

    public function __construct(
        /**
         * The amount to pay, in the smallest units of the currency.
         */
        protected int               $amount,
        /**
         * ISO 4217 currency code for Telegram Premium subscription payment.
         */
        protected string            $currency,
        /**
         * The discount associated with this option, as a percentage.
         */
        protected int               $discountPercentage,
        /**
         * Number of months the Telegram Premium subscription will be active. Use getPremiumInfoSticker to get the sticker to be used as representation of the Telegram Premium subscription.
         */
        protected int               $monthCount,
        /**
         * An internal link to be opened for buying Telegram Premium to the user if store payment isn't possible; may be null if direct payment isn't available.
         */
        protected ?InternalLinkType $paymentLink,
        /**
         * Identifier of the store product associated with the option.
         */
        protected string            $storeProductId,
    ) {}

    public static function fromArray(array $array): PremiumPaymentOption
    {
        return new static(
            amount            : $array['amount'],
            currency          : $array['currency'],
            discountPercentage: $array['discount_percentage'],
            monthCount        : $array['month_count'],
            paymentLink       : (isset($array['payment_link']) ? TdSchemaRegistry::fromArray($array['payment_link']) : null),
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

    public function getPaymentLink(): ?InternalLinkType
    {
        return $this->paymentLink;
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

    public function setPaymentLink(?InternalLinkType $value): static
    {
        $this->paymentLink = $value;

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
            'payment_link'        => (null !== $this->paymentLink ? $this->paymentLink->jsonSerialize() : null),
            'store_product_id'    => $this->storeProductId,
        ];
    }
}

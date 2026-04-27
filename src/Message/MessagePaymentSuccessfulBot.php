<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Order\OrderInfo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A payment has been received by the bot or the business account.
 */
class MessagePaymentSuccessfulBot extends MessageContent
{
    public const string TYPE_NAME = 'messagePaymentSuccessfulBot';

    public function __construct(
        /**
         * Currency for price of the product.
         */
        protected string     $currency,
        /**
         * Invoice payload.
         */
        protected string     $invoicePayload,
        /**
         * True, if this is the first recurring payment.
         */
        protected bool       $isFirstRecurring,
        /**
         * True, if this is a recurring payment.
         */
        protected bool       $isRecurring,
        /**
         * Information about the order; may be null; for bots only.
         */
        protected ?OrderInfo $orderInfo,
        /**
         * Provider payment identifier.
         */
        protected string     $providerPaymentChargeId,
        /**
         * Identifier of the shipping option chosen by the user; may be empty if not applicable; for bots only.
         */
        protected string     $shippingOptionId,
        /**
         * Point in time (Unix timestamp) when the subscription will expire; 0 if unknown or the payment isn't recurring.
         */
        protected int        $subscriptionUntilDate,
        /**
         * Telegram payment identifier.
         */
        protected string     $telegramPaymentChargeId,
        /**
         * Total price for the product, in the smallest units of the currency.
         */
        protected int        $totalAmount,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessagePaymentSuccessfulBot
    {
        return new static(
            currency               : $array['currency'],
            invoicePayload         : $array['invoice_payload'],
            isFirstRecurring       : $array['is_first_recurring'],
            isRecurring            : $array['is_recurring'],
            orderInfo              : (isset($array['order_info']) ? TdSchemaRegistry::fromArray($array['order_info']) : null),
            providerPaymentChargeId: $array['provider_payment_charge_id'],
            shippingOptionId       : $array['shipping_option_id'],
            subscriptionUntilDate  : $array['subscription_until_date'],
            telegramPaymentChargeId: $array['telegram_payment_charge_id'],
            totalAmount            : $array['total_amount'],
        );
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getInvoicePayload(): string
    {
        return $this->invoicePayload;
    }

    public function getIsFirstRecurring(): bool
    {
        return $this->isFirstRecurring;
    }

    public function getIsRecurring(): bool
    {
        return $this->isRecurring;
    }

    public function getOrderInfo(): ?OrderInfo
    {
        return $this->orderInfo;
    }

    public function getProviderPaymentChargeId(): string
    {
        return $this->providerPaymentChargeId;
    }

    public function getShippingOptionId(): string
    {
        return $this->shippingOptionId;
    }

    public function getSubscriptionUntilDate(): int
    {
        return $this->subscriptionUntilDate;
    }

    public function getTelegramPaymentChargeId(): string
    {
        return $this->telegramPaymentChargeId;
    }

    public function getTotalAmount(): int
    {
        return $this->totalAmount;
    }

    public function setCurrency(string $value): static
    {
        $this->currency = $value;

        return $this;
    }

    public function setInvoicePayload(string $value): static
    {
        $this->invoicePayload = $value;

        return $this;
    }

    public function setIsFirstRecurring(bool $value): static
    {
        $this->isFirstRecurring = $value;

        return $this;
    }

    public function setIsRecurring(bool $value): static
    {
        $this->isRecurring = $value;

        return $this;
    }

    public function setOrderInfo(?OrderInfo $value): static
    {
        $this->orderInfo = $value;

        return $this;
    }

    public function setProviderPaymentChargeId(string $value): static
    {
        $this->providerPaymentChargeId = $value;

        return $this;
    }

    public function setShippingOptionId(string $value): static
    {
        $this->shippingOptionId = $value;

        return $this;
    }

    public function setSubscriptionUntilDate(int $value): static
    {
        $this->subscriptionUntilDate = $value;

        return $this;
    }

    public function setTelegramPaymentChargeId(string $value): static
    {
        $this->telegramPaymentChargeId = $value;

        return $this;
    }

    public function setTotalAmount(int $value): static
    {
        $this->totalAmount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                      => static::TYPE_NAME,
            'currency'                   => $this->currency,
            'invoice_payload'            => $this->invoicePayload,
            'is_first_recurring'         => $this->isFirstRecurring,
            'is_recurring'               => $this->isRecurring,
            'order_info'                 => (null !== $this->orderInfo ? $this->orderInfo->jsonSerialize() : null),
            'provider_payment_charge_id' => $this->providerPaymentChargeId,
            'shipping_option_id'         => $this->shippingOptionId,
            'subscription_until_date'    => $this->subscriptionUntilDate,
            'telegram_payment_charge_id' => $this->telegramPaymentChargeId,
            'total_amount'               => $this->totalAmount,
        ];
    }
}

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
    public const TYPE_NAME = 'messagePaymentSuccessfulBot';

    public function __construct(
        /**
         * Currency for price of the product.
         */
        protected string     $currency,
        /**
         * Total price for the product, in the smallest units of the currency.
         */
        protected int        $totalAmount,
        /**
         * Point in time (Unix timestamp) when the subscription will expire; 0 if unknown or the payment isn't recurring.
         */
        protected int        $subscriptionUntilDate,
        /**
         * True, if this is a recurring payment.
         */
        protected bool       $isRecurring,
        /**
         * True, if this is the first recurring payment.
         */
        protected bool       $isFirstRecurring,
        /**
         * Invoice payload.
         */
        protected string     $invoicePayload,
        /**
         * Identifier of the shipping option chosen by the user; may be empty if not applicable; for bots only.
         */
        protected string     $shippingOptionId,
        /**
         * Information about the order; may be null; for bots only.
         */
        protected ?OrderInfo $orderInfo,
        /**
         * Telegram payment identifier.
         */
        protected string     $telegramPaymentChargeId,
        /**
         * Provider payment identifier.
         */
        protected string     $providerPaymentChargeId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessagePaymentSuccessfulBot
    {
        return new static(
            $array['currency'],
            $array['total_amount'],
            $array['subscription_until_date'],
            $array['is_recurring'],
            $array['is_first_recurring'],
            $array['invoice_payload'],
            $array['shipping_option_id'],
            isset($array['order_info']) ? TdSchemaRegistry::fromArray($array['order_info']) : null,
            $array['telegram_payment_charge_id'],
            $array['provider_payment_charge_id'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'                      => static::TYPE_NAME,
            'currency'                   => $this->currency,
            'total_amount'               => $this->totalAmount,
            'subscription_until_date'    => $this->subscriptionUntilDate,
            'is_recurring'               => $this->isRecurring,
            'is_first_recurring'         => $this->isFirstRecurring,
            'invoice_payload'            => $this->invoicePayload,
            'shipping_option_id'         => $this->shippingOptionId,
            'order_info'                 => $this->orderInfo ?? null,
            'telegram_payment_charge_id' => $this->telegramPaymentChargeId,
            'provider_payment_charge_id' => $this->providerPaymentChargeId,
        ];
    }
}

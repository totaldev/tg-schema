<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Order\OrderInfo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A payment has been completed; for bots only
 */
class MessagePaymentSuccessfulBot extends MessageContent
{
    public const TYPE_NAME = 'messagePaymentSuccessfulBot';

    /**
     * Currency for price of the product
     *
     * @var string
     */
    protected string $currency;

    /**
     * Total price for the product, in the smallest units of the currency
     *
     * @var int
     */
    protected int $totalAmount;

    /**
     * True, if this is a recurring payment
     *
     * @var bool
     */
    protected bool $isRecurring;

    /**
     * True, if this is the first recurring payment
     *
     * @var bool
     */
    protected bool $isFirstRecurring;

    /**
     * Invoice payload
     *
     * @var string
     */
    protected string $invoicePayload;

    /**
     * Identifier of the shipping option chosen by the user; may be empty if not applicable
     *
     * @var string
     */
    protected string $shippingOptionId;

    /**
     * Information about the order; may be null
     *
     * @var OrderInfo|null
     */
    protected ?OrderInfo $orderInfo;

    /**
     * Telegram payment identifier
     *
     * @var string
     */
    protected string $telegramPaymentChargeId;

    /**
     * Provider payment identifier
     *
     * @var string
     */
    protected string $providerPaymentChargeId;

    public function __construct(
        string $currency,
        int $totalAmount,
        bool $isRecurring,
        bool $isFirstRecurring,
        string $invoicePayload,
        string $shippingOptionId,
        ?OrderInfo $orderInfo,
        string $telegramPaymentChargeId,
        string $providerPaymentChargeId,
    ) {
        parent::__construct();

        $this->currency = $currency;
        $this->totalAmount = $totalAmount;
        $this->isRecurring = $isRecurring;
        $this->isFirstRecurring = $isFirstRecurring;
        $this->invoicePayload = $invoicePayload;
        $this->shippingOptionId = $shippingOptionId;
        $this->orderInfo = $orderInfo;
        $this->telegramPaymentChargeId = $telegramPaymentChargeId;
        $this->providerPaymentChargeId = $providerPaymentChargeId;
    }

    public static function fromArray(array $array): MessagePaymentSuccessfulBot
    {
        return new static(
            $array['currency'],
            $array['total_amount'],
            $array['is_recurring'],
            $array['is_first_recurring'],
            $array['invoice_payload'],
            $array['shipping_option_id'],
            (isset($array['order_info']) ? TdSchemaRegistry::fromArray($array['order_info']) : null),
            $array['telegram_payment_charge_id'],
            $array['provider_payment_charge_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'currency' => $this->currency,
            'total_amount' => $this->totalAmount,
            'is_recurring' => $this->isRecurring,
            'is_first_recurring' => $this->isFirstRecurring,
            'invoice_payload' => $this->invoicePayload,
            'shipping_option_id' => $this->shippingOptionId,
            'order_info' => (isset($this->orderInfo) ? $this->orderInfo : null),
            'telegram_payment_charge_id' => $this->telegramPaymentChargeId,
            'provider_payment_charge_id' => $this->providerPaymentChargeId,
        ];
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getTotalAmount(): int
    {
        return $this->totalAmount;
    }

    public function getIsRecurring(): bool
    {
        return $this->isRecurring;
    }

    public function getIsFirstRecurring(): bool
    {
        return $this->isFirstRecurring;
    }

    public function getInvoicePayload(): string
    {
        return $this->invoicePayload;
    }

    public function getShippingOptionId(): string
    {
        return $this->shippingOptionId;
    }

    public function getOrderInfo(): ?OrderInfo
    {
        return $this->orderInfo;
    }

    public function getTelegramPaymentChargeId(): string
    {
        return $this->telegramPaymentChargeId;
    }

    public function getProviderPaymentChargeId(): string
    {
        return $this->providerPaymentChargeId;
    }
}

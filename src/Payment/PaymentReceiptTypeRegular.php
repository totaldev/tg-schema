<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Payment;

use Totaldev\TgSchema\Invoice\Invoice;
use Totaldev\TgSchema\Order\OrderInfo;
use Totaldev\TgSchema\Shipping\ShippingOption;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The payment was done using a third-party payment provider.
 */
class PaymentReceiptTypeRegular extends PaymentReceiptType
{
    public const string TYPE_NAME = 'paymentReceiptTypeRegular';

    public function __construct(
        /**
         * User identifier of the payment provider bot.
         */
        protected int             $paymentProviderUserId,
        /**
         * Information about the invoice.
         */
        protected Invoice         $invoice,
        /**
         * Order information; may be null.
         */
        protected ?OrderInfo      $orderInfo,
        /**
         * Chosen shipping option; may be null.
         */
        protected ?ShippingOption $shippingOption,
        /**
         * Title of the saved credentials chosen by the buyer.
         */
        protected string          $credentialsTitle,
        /**
         * The amount of tip chosen by the buyer in the smallest units of the currency.
         */
        protected int             $tipAmount,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PaymentReceiptTypeRegular
    {
        return new static(
            $array['payment_provider_user_id'],
            TdSchemaRegistry::fromArray($array['invoice']),
            isset($array['order_info']) ? TdSchemaRegistry::fromArray($array['order_info']) : null,
            isset($array['shipping_option']) ? TdSchemaRegistry::fromArray($array['shipping_option']) : null,
            $array['credentials_title'],
            $array['tip_amount'],
        );
    }

    public function getCredentialsTitle(): string
    {
        return $this->credentialsTitle;
    }

    public function getInvoice(): Invoice
    {
        return $this->invoice;
    }

    public function getOrderInfo(): ?OrderInfo
    {
        return $this->orderInfo;
    }

    public function getPaymentProviderUserId(): int
    {
        return $this->paymentProviderUserId;
    }

    public function getShippingOption(): ?ShippingOption
    {
        return $this->shippingOption;
    }

    public function getTipAmount(): int
    {
        return $this->tipAmount;
    }

    public function setCredentialsTitle(string $value): static
    {
        $this->credentialsTitle = $value;

        return $this;
    }

    public function setInvoice(Invoice $value): static
    {
        $this->invoice = $value;

        return $this;
    }

    public function setOrderInfo(?OrderInfo $value): static
    {
        $this->orderInfo = $value;

        return $this;
    }

    public function setPaymentProviderUserId(int $value): static
    {
        $this->paymentProviderUserId = $value;

        return $this;
    }

    public function setShippingOption(?ShippingOption $value): static
    {
        $this->shippingOption = $value;

        return $this;
    }

    public function setTipAmount(int $value): static
    {
        $this->tipAmount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                    => static::TYPE_NAME,
            'payment_provider_user_id' => $this->paymentProviderUserId,
            'invoice'                  => $this->invoice->typeSerialize(),
            'order_info'               => $this->orderInfo ?? null,
            'shipping_option'          => $this->shippingOption ?? null,
            'credentials_title'        => $this->credentialsTitle,
            'tip_amount'               => $this->tipAmount,
        ];
    }
}

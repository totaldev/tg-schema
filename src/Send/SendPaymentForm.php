<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Send;

use Totaldev\TgSchema\Input\InputCredentials;
use Totaldev\TgSchema\Input\InputInvoice;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sends a filled-out payment form to the bot for final verification.
 */
class SendPaymentForm extends TdFunction
{
    public const string TYPE_NAME = 'sendPaymentForm';

    public function __construct(
        /**
         * The invoice.
         */
        protected InputInvoice      $inputInvoice,
        /**
         * Identifier returned by validateOrderInfo, or an empty string.
         */
        protected string            $orderInfoId,
        /**
         * Payment form identifier returned by getPaymentForm.
         */
        protected int               $paymentFormId,
        /**
         * Identifier of a chosen shipping option, if applicable.
         */
        protected string            $shippingOptionId,
        /**
         * Chosen by the user amount of tip in the smallest units of the currency.
         */
        protected int               $tipAmount,
        /**
         * The credentials chosen by user for payment; pass null for a payment in Telegram Stars.
         */
        protected ?InputCredentials $credentials = null,
    ) {}

    public static function fromArray(array $array): SendPaymentForm
    {
        return new static(
            credentials     : (isset($array['credentials']) ? TdSchemaRegistry::fromArray($array['credentials']) : null),
            inputInvoice    : TdSchemaRegistry::fromArray($array['input_invoice']),
            orderInfoId     : $array['order_info_id'],
            paymentFormId   : $array['payment_form_id'],
            shippingOptionId: $array['shipping_option_id'],
            tipAmount       : $array['tip_amount'],
        );
    }

    public function getCredentials(): ?InputCredentials
    {
        return $this->credentials;
    }

    public function getInputInvoice(): InputInvoice
    {
        return $this->inputInvoice;
    }

    public function getOrderInfoId(): string
    {
        return $this->orderInfoId;
    }

    public function getPaymentFormId(): int
    {
        return $this->paymentFormId;
    }

    public function getShippingOptionId(): string
    {
        return $this->shippingOptionId;
    }

    public function getTipAmount(): int
    {
        return $this->tipAmount;
    }

    public function setCredentials(?InputCredentials $value): static
    {
        $this->credentials = $value;

        return $this;
    }

    public function setInputInvoice(InputInvoice $value): static
    {
        $this->inputInvoice = $value;

        return $this;
    }

    public function setOrderInfoId(string $value): static
    {
        $this->orderInfoId = $value;

        return $this;
    }

    public function setPaymentFormId(int $value): static
    {
        $this->paymentFormId = $value;

        return $this;
    }

    public function setShippingOptionId(string $value): static
    {
        $this->shippingOptionId = $value;

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
            '@type'              => static::TYPE_NAME,
            'credentials'        => (null !== $this->credentials ? $this->credentials->jsonSerialize() : null),
            'input_invoice'      => $this->inputInvoice->jsonSerialize(),
            'order_info_id'      => $this->orderInfoId,
            'payment_form_id'    => $this->paymentFormId,
            'shipping_option_id' => $this->shippingOptionId,
            'tip_amount'         => $this->tipAmount,
        ];
    }
}

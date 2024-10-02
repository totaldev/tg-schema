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
    public const TYPE_NAME = 'sendPaymentForm';

    public function __construct(
        /**
         * The invoice.
         */
        protected InputInvoice     $inputInvoice,
        /**
         * Payment form identifier returned by getPaymentForm.
         */
        protected int              $paymentFormId,
        /**
         * Identifier returned by validateOrderInfo, or an empty string.
         */
        protected string           $orderInfoId,
        /**
         * Identifier of a chosen shipping option, if applicable.
         */
        protected string           $shippingOptionId,
        /**
         * The credentials chosen by user for payment; pass null for a payment in Telegram Stars.
         */
        protected InputCredentials $credentials,
        /**
         * Chosen by the user amount of tip in the smallest units of the currency.
         */
        protected int              $tipAmount,
    ) {}

    public static function fromArray(array $array): SendPaymentForm
    {
        return new static(
            TdSchemaRegistry::fromArray($array['input_invoice']),
            $array['payment_form_id'],
            $array['order_info_id'],
            $array['shipping_option_id'],
            TdSchemaRegistry::fromArray($array['credentials']),
            $array['tip_amount'],
        );
    }

    public function getCredentials(): InputCredentials
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

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'input_invoice'      => $this->inputInvoice->typeSerialize(),
            'payment_form_id'    => $this->paymentFormId,
            'order_info_id'      => $this->orderInfoId,
            'shipping_option_id' => $this->shippingOptionId,
            'credentials'        => $this->credentials->typeSerialize(),
            'tip_amount'         => $this->tipAmount,
        ];
    }
}

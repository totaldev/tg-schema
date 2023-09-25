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
 * Sends a filled-out payment form to the bot for final verification
 */
class SendPaymentForm extends TdFunction
{
    public const TYPE_NAME = 'sendPaymentForm';

    /**
     * The credentials chosen by user for payment
     *
     * @var InputCredentials
     */
    protected InputCredentials $credentials;

    /**
     * The invoice
     *
     * @var InputInvoice
     */
    protected InputInvoice $inputInvoice;

    /**
     * Identifier returned by validateOrderInfo, or an empty string
     *
     * @var string
     */
    protected string $orderInfoId;

    /**
     * Payment form identifier returned by getPaymentForm
     *
     * @var int
     */
    protected int $paymentFormId;

    /**
     * Identifier of a chosen shipping option, if applicable
     *
     * @var string
     */
    protected string $shippingOptionId;

    /**
     * Chosen by the user amount of tip in the smallest units of the currency
     *
     * @var int
     */
    protected int $tipAmount;

    public function __construct(
        InputInvoice     $inputInvoice,
        int              $paymentFormId,
        string           $orderInfoId,
        string           $shippingOptionId,
        InputCredentials $credentials,
        int              $tipAmount,
    )
    {
        $this->inputInvoice = $inputInvoice;
        $this->paymentFormId = $paymentFormId;
        $this->orderInfoId = $orderInfoId;
        $this->shippingOptionId = $shippingOptionId;
        $this->credentials = $credentials;
        $this->tipAmount = $tipAmount;
    }

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
            '@type' => static::TYPE_NAME,
            'input_invoice' => $this->inputInvoice->typeSerialize(),
            'payment_form_id' => $this->paymentFormId,
            'order_info_id' => $this->orderInfoId,
            'shipping_option_id' => $this->shippingOptionId,
            'credentials' => $this->credentials->typeSerialize(),
            'tip_amount' => $this->tipAmount,
        ];
    }
}

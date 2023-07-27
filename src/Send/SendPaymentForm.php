<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Send;

use Totaldev\TgSchema\TdFunction;

/**
 * Sends a filled-out payment form to the bot for final verification
 */
class SendPaymentForm extends TdFunction
{
    public const TYPE_NAME = 'sendPaymentForm';

    /**
     * The invoice
     *
     * @var InputInvoice
     */
    protected InputInvoice $inputInvoice;

    /**
     * Payment form identifier returned by getPaymentForm
     *
     * @var int
     */
    protected int $paymentFormId;

    /**
     * Identifier returned by validateOrderInfo, or an empty string
     *
     * @var string
     */
    protected string $orderInfoId;

    /**
     * Identifier of a chosen shipping option, if applicable
     *
     * @var string
     */
    protected string $shippingOptionId;

    /**
     * The credentials chosen by user for payment
     *
     * @var InputCredentials
     */
    protected InputCredentials $credentials;

    /**
     * Chosen by the user amount of tip in the smallest units of the currency
     *
     * @var int
     */
    protected int $tipAmount;

    public function __construct(
        InputInvoice $inputInvoice,
        int $paymentFormId,
        string $orderInfoId,
        string $shippingOptionId,
        InputCredentials $credentials,
        int $tipAmount,
    ) {
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

    public function getInputInvoice(): InputInvoice
    {
        return $this->inputInvoice;
    }

    public function getPaymentFormId(): int
    {
        return $this->paymentFormId;
    }

    public function getOrderInfoId(): string
    {
        return $this->orderInfoId;
    }

    public function getShippingOptionId(): string
    {
        return $this->shippingOptionId;
    }

    public function getCredentials(): InputCredentials
    {
        return $this->credentials;
    }

    public function getTipAmount(): int
    {
        return $this->tipAmount;
    }
}

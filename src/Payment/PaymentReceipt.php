<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Payment;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Invoice\Invoice;
use Totaldev\TgSchema\Order\OrderInfo;
use Totaldev\TgSchema\Photo\Photo;
use Totaldev\TgSchema\Shipping\ShippingOption;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about a successful payment
 */
class PaymentReceipt extends TdObject
{
    public const TYPE_NAME = 'paymentReceipt';

    /**
     * Title of the saved credentials chosen by the buyer
     *
     * @var string
     */
    protected string $credentialsTitle;

    /**
     * Point in time (Unix timestamp) when the payment was made
     *
     * @var int
     */
    protected int $date;

    /**
     * Product description
     *
     * @var FormattedText
     */
    protected FormattedText $description;

    /**
     * Information about the invoice
     *
     * @var Invoice
     */
    protected Invoice $invoice;

    /**
     * Order information; may be null
     *
     * @var OrderInfo|null
     */
    protected ?OrderInfo $orderInfo;

    /**
     * User identifier of the payment provider bot
     *
     * @var int
     */
    protected int $paymentProviderUserId;

    /**
     * Product photo; may be null
     *
     * @var Photo|null
     */
    protected ?Photo $photo;

    /**
     * User identifier of the seller bot
     *
     * @var int
     */
    protected int $sellerBotUserId;

    /**
     * Chosen shipping option; may be null
     *
     * @var ShippingOption|null
     */
    protected ?ShippingOption $shippingOption;

    /**
     * The amount of tip chosen by the buyer in the smallest units of the currency
     *
     * @var int
     */
    protected int $tipAmount;

    /**
     * Product title
     *
     * @var string
     */
    protected string $title;

    public function __construct(
        string          $title,
        FormattedText   $description,
        ?Photo          $photo,
        int             $date,
        int             $sellerBotUserId,
        int             $paymentProviderUserId,
        Invoice         $invoice,
        ?OrderInfo      $orderInfo,
        ?ShippingOption $shippingOption,
        string          $credentialsTitle,
        int             $tipAmount,
    )
    {
        $this->title = $title;
        $this->description = $description;
        $this->photo = $photo;
        $this->date = $date;
        $this->sellerBotUserId = $sellerBotUserId;
        $this->paymentProviderUserId = $paymentProviderUserId;
        $this->invoice = $invoice;
        $this->orderInfo = $orderInfo;
        $this->shippingOption = $shippingOption;
        $this->credentialsTitle = $credentialsTitle;
        $this->tipAmount = $tipAmount;
    }

    public static function fromArray(array $array): PaymentReceipt
    {
        return new static(
            $array['title'],
            TdSchemaRegistry::fromArray($array['description']),
            (isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null),
            $array['date'],
            $array['seller_bot_user_id'],
            $array['payment_provider_user_id'],
            TdSchemaRegistry::fromArray($array['invoice']),
            (isset($array['order_info']) ? TdSchemaRegistry::fromArray($array['order_info']) : null),
            (isset($array['shipping_option']) ? TdSchemaRegistry::fromArray($array['shipping_option']) : null),
            $array['credentials_title'],
            $array['tip_amount'],
        );
    }

    public function getCredentialsTitle(): string
    {
        return $this->credentialsTitle;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getDescription(): FormattedText
    {
        return $this->description;
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

    public function getPhoto(): ?Photo
    {
        return $this->photo;
    }

    public function getSellerBotUserId(): int
    {
        return $this->sellerBotUserId;
    }

    public function getShippingOption(): ?ShippingOption
    {
        return $this->shippingOption;
    }

    public function getTipAmount(): int
    {
        return $this->tipAmount;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'title' => $this->title,
            'description' => $this->description->typeSerialize(),
            'photo' => (isset($this->photo) ? $this->photo : null),
            'date' => $this->date,
            'seller_bot_user_id' => $this->sellerBotUserId,
            'payment_provider_user_id' => $this->paymentProviderUserId,
            'invoice' => $this->invoice->typeSerialize(),
            'order_info' => (isset($this->orderInfo) ? $this->orderInfo : null),
            'shipping_option' => (isset($this->shippingOption) ? $this->shippingOption : null),
            'credentials_title' => $this->credentialsTitle,
            'tip_amount' => $this->tipAmount,
        ];
    }
}

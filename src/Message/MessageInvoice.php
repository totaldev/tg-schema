<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Paid\PaidMedia;
use Totaldev\TgSchema\Product\ProductInfo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A message with an invoice from a bot. Use getInternalLink with internalLinkTypeBotStart to share the invoice.
 */
class MessageInvoice extends MessageContent
{
    public const string TYPE_NAME = 'messageInvoice';

    public function __construct(
        /**
         * Currency for the product price.
         */
        protected string         $currency,
        /**
         * True, if the invoice is a test invoice.
         */
        protected bool           $isTest,
        /**
         * True, if the shipping address must be specified.
         */
        protected bool           $needShippingAddress,
        /**
         * Extended media attached to the invoice; may be null if none.
         */
        protected ?PaidMedia     $paidMedia,
        /**
         * Extended media caption; may be null if none.
         */
        protected ?FormattedText $paidMediaCaption,
        /**
         * Information about the product.
         */
        protected ProductInfo    $productInfo,
        /**
         * The identifier of the message with the receipt, after the product has been purchased.
         */
        protected int            $receiptMessageId,
        /**
         * Unique invoice bot start_parameter to be passed to getInternalLink.
         */
        protected string         $startParameter,
        /**
         * Product total price in the smallest units of the currency.
         */
        protected int            $totalAmount,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageInvoice
    {
        return new static(
            currency           : $array['currency'],
            isTest             : $array['is_test'],
            needShippingAddress: $array['need_shipping_address'],
            paidMedia          : (isset($array['paid_media']) ? TdSchemaRegistry::fromArray($array['paid_media']) : null),
            paidMediaCaption   : (isset($array['paid_media_caption']) ? TdSchemaRegistry::fromArray($array['paid_media_caption']) : null),
            productInfo        : TdSchemaRegistry::fromArray($array['product_info']),
            receiptMessageId   : $array['receipt_message_id'],
            startParameter     : $array['start_parameter'],
            totalAmount        : $array['total_amount'],
        );
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getIsTest(): bool
    {
        return $this->isTest;
    }

    public function getNeedShippingAddress(): bool
    {
        return $this->needShippingAddress;
    }

    public function getPaidMedia(): ?PaidMedia
    {
        return $this->paidMedia;
    }

    public function getPaidMediaCaption(): ?FormattedText
    {
        return $this->paidMediaCaption;
    }

    public function getProductInfo(): ProductInfo
    {
        return $this->productInfo;
    }

    public function getReceiptMessageId(): int
    {
        return $this->receiptMessageId;
    }

    public function getStartParameter(): string
    {
        return $this->startParameter;
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

    public function setIsTest(bool $value): static
    {
        $this->isTest = $value;

        return $this;
    }

    public function setNeedShippingAddress(bool $value): static
    {
        $this->needShippingAddress = $value;

        return $this;
    }

    public function setPaidMedia(?PaidMedia $value): static
    {
        $this->paidMedia = $value;

        return $this;
    }

    public function setPaidMediaCaption(?FormattedText $value): static
    {
        $this->paidMediaCaption = $value;

        return $this;
    }

    public function setProductInfo(ProductInfo $value): static
    {
        $this->productInfo = $value;

        return $this;
    }

    public function setReceiptMessageId(int $value): static
    {
        $this->receiptMessageId = $value;

        return $this;
    }

    public function setStartParameter(string $value): static
    {
        $this->startParameter = $value;

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
            '@type'                 => static::TYPE_NAME,
            'currency'              => $this->currency,
            'is_test'               => $this->isTest,
            'need_shipping_address' => $this->needShippingAddress,
            'paid_media'            => (null !== $this->paidMedia ? $this->paidMedia->jsonSerialize() : null),
            'paid_media_caption'    => (null !== $this->paidMediaCaption ? $this->paidMediaCaption->jsonSerialize() : null),
            'product_info'          => $this->productInfo->jsonSerialize(),
            'receipt_message_id'    => $this->receiptMessageId,
            'start_parameter'       => $this->startParameter,
            'total_amount'          => $this->totalAmount,
        ];
    }
}

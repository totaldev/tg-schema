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
    public const TYPE_NAME = 'messageInvoice';

    public function __construct(
        /**
         * Information about the product.
         */
        protected ProductInfo    $productInfo,
        /**
         * Currency for the product price.
         */
        protected string         $currency,
        /**
         * Product total price in the smallest units of the currency.
         */
        protected int            $totalAmount,
        /**
         * Unique invoice bot start_parameter to be passed to getInternalLink.
         */
        protected string         $startParameter,
        /**
         * True, if the invoice is a test invoice.
         */
        protected bool           $isTest,
        /**
         * True, if the shipping address must be specified.
         */
        protected bool           $needShippingAddress,
        /**
         * The identifier of the message with the receipt, after the product has been purchased.
         */
        protected int            $receiptMessageId,
        /**
         * Extended media attached to the invoice; may be null if none.
         */
        protected ?PaidMedia     $paidMedia,
        /**
         * Extended media caption; may be null if none.
         */
        protected ?FormattedText $paidMediaCaption,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageInvoice
    {
        return new static(
            TdSchemaRegistry::fromArray($array['product_info']),
            $array['currency'],
            $array['total_amount'],
            $array['start_parameter'],
            $array['is_test'],
            $array['need_shipping_address'],
            $array['receipt_message_id'],
            isset($array['paid_media']) ? TdSchemaRegistry::fromArray($array['paid_media']) : null,
            isset($array['paid_media_caption']) ? TdSchemaRegistry::fromArray($array['paid_media_caption']) : null,
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

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'product_info'          => $this->productInfo->typeSerialize(),
            'currency'              => $this->currency,
            'total_amount'          => $this->totalAmount,
            'start_parameter'       => $this->startParameter,
            'is_test'               => $this->isTest,
            'need_shipping_address' => $this->needShippingAddress,
            'receipt_message_id'    => $this->receiptMessageId,
            'paid_media'            => $this->paidMedia ?? null,
            'paid_media_caption'    => $this->paidMediaCaption ?? null,
        ];
    }
}

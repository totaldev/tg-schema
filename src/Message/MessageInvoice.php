<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Photo\Photo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A message with an invoice from a bot. Use getInternalLink with internalLinkTypeBotStart to share the invoice
 */
class MessageInvoice extends MessageContent
{
    public const TYPE_NAME = 'messageInvoice';

    /**
     * Currency for the product price
     *
     * @var string
     */
    protected string $currency;

    /**
     * Product description
     *
     * @var FormattedText
     */
    protected FormattedText $description;

    /**
     * Extended media attached to the invoice; may be null
     *
     * @var MessageExtendedMedia|null
     */
    protected ?MessageExtendedMedia $extendedMedia;

    /**
     * True, if the invoice is a test invoice
     *
     * @var bool
     */
    protected bool $isTest;

    /**
     * True, if the shipping address must be specified
     *
     * @var bool
     */
    protected bool $needShippingAddress;

    /**
     * Product photo; may be null
     *
     * @var Photo|null
     */
    protected ?Photo $photo;

    /**
     * The identifier of the message with the receipt, after the product has been purchased
     *
     * @var int
     */
    protected int $receiptMessageId;

    /**
     * Unique invoice bot start_parameter to be passed to getInternalLink
     *
     * @var string
     */
    protected string $startParameter;

    /**
     * Product title
     *
     * @var string
     */
    protected string $title;

    /**
     * Product total price in the smallest units of the currency
     *
     * @var int
     */
    protected int $totalAmount;

    public function __construct(
        string                $title,
        FormattedText         $description,
        ?Photo                $photo,
        string                $currency,
        int                   $totalAmount,
        string                $startParameter,
        bool                  $isTest,
        bool                  $needShippingAddress,
        int                   $receiptMessageId,
        ?MessageExtendedMedia $extendedMedia,
    )
    {
        parent::__construct();

        $this->title = $title;
        $this->description = $description;
        $this->photo = $photo;
        $this->currency = $currency;
        $this->totalAmount = $totalAmount;
        $this->startParameter = $startParameter;
        $this->isTest = $isTest;
        $this->needShippingAddress = $needShippingAddress;
        $this->receiptMessageId = $receiptMessageId;
        $this->extendedMedia = $extendedMedia;
    }

    public static function fromArray(array $array): MessageInvoice
    {
        return new static(
            $array['title'],
            TdSchemaRegistry::fromArray($array['description']),
            (isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null),
            $array['currency'],
            $array['total_amount'],
            $array['start_parameter'],
            $array['is_test'],
            $array['need_shipping_address'],
            $array['receipt_message_id'],
            (isset($array['extended_media']) ? TdSchemaRegistry::fromArray($array['extended_media']) : null),
        );
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getDescription(): FormattedText
    {
        return $this->description;
    }

    public function getExtendedMedia(): ?MessageExtendedMedia
    {
        return $this->extendedMedia;
    }

    public function getIsTest(): bool
    {
        return $this->isTest;
    }

    public function getNeedShippingAddress(): bool
    {
        return $this->needShippingAddress;
    }

    public function getPhoto(): ?Photo
    {
        return $this->photo;
    }

    public function getReceiptMessageId(): int
    {
        return $this->receiptMessageId;
    }

    public function getStartParameter(): string
    {
        return $this->startParameter;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getTotalAmount(): int
    {
        return $this->totalAmount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'title' => $this->title,
            'description' => $this->description->typeSerialize(),
            'photo' => (isset($this->photo) ? $this->photo : null),
            'currency' => $this->currency,
            'total_amount' => $this->totalAmount,
            'start_parameter' => $this->startParameter,
            'is_test' => $this->isTest,
            'need_shipping_address' => $this->needShippingAddress,
            'receipt_message_id' => $this->receiptMessageId,
            'extended_media' => (isset($this->extendedMedia) ? $this->extendedMedia : null),
        ];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Invoice\Invoice;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A message with an invoice; can be used only by bots
 */
class InputMessageInvoice extends InputMessageContent
{
    public const TYPE_NAME = 'inputMessageInvoice';

    /**
     * Product description; 0-255 characters
     *
     * @var string
     */
    protected string $description;

    /**
     * The content of extended media attached to the invoice. The content of the message to be sent. Must be one of the following types: inputMessagePhoto,
     * inputMessageVideo
     *
     * @var InputMessageContent
     */
    protected InputMessageContent $extendedMediaContent;

    /**
     * Invoice
     *
     * @var Invoice
     */
    protected Invoice $invoice;

    /**
     * The invoice payload
     *
     * @var string
     */
    protected string $payload;

    /**
     * Product photo height
     *
     * @var int
     */
    protected int $photoHeight;

    /**
     * Product photo size
     *
     * @var int
     */
    protected int $photoSize;

    /**
     * Product photo URL; optional
     *
     * @var string
     */
    protected string $photoUrl;

    /**
     * Product photo width
     *
     * @var int
     */
    protected int $photoWidth;

    /**
     * JSON-encoded data about the invoice, which will be shared with the payment provider
     *
     * @var string
     */
    protected string $providerData;

    /**
     * Payment provider token
     *
     * @var string
     */
    protected string $providerToken;

    /**
     * Unique invoice bot deep link parameter for the generation of this invoice. If empty, it would be possible to pay directly from forwards of the invoice
     * message
     *
     * @var string
     */
    protected string $startParameter;

    /**
     * Product title; 1-32 characters
     *
     * @var string
     */
    protected string $title;

    public function __construct(
        Invoice             $invoice,
        string              $title,
        string              $description,
        string              $photoUrl,
        int                 $photoSize,
        int                 $photoWidth,
        int                 $photoHeight,
        string              $payload,
        string              $providerToken,
        string              $providerData,
        string              $startParameter,
        InputMessageContent $extendedMediaContent,
    )
    {
        parent::__construct();

        $this->invoice = $invoice;
        $this->title = $title;
        $this->description = $description;
        $this->photoUrl = $photoUrl;
        $this->photoSize = $photoSize;
        $this->photoWidth = $photoWidth;
        $this->photoHeight = $photoHeight;
        $this->payload = $payload;
        $this->providerToken = $providerToken;
        $this->providerData = $providerData;
        $this->startParameter = $startParameter;
        $this->extendedMediaContent = $extendedMediaContent;
    }

    public static function fromArray(array $array): InputMessageInvoice
    {
        return new static(
            TdSchemaRegistry::fromArray($array['invoice']),
            $array['title'],
            $array['description'],
            $array['photo_url'],
            $array['photo_size'],
            $array['photo_width'],
            $array['photo_height'],
            $array['payload'],
            $array['provider_token'],
            $array['provider_data'],
            $array['start_parameter'],
            TdSchemaRegistry::fromArray($array['extended_media_content']),
        );
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getExtendedMediaContent(): InputMessageContent
    {
        return $this->extendedMediaContent;
    }

    public function getInvoice(): Invoice
    {
        return $this->invoice;
    }

    public function getPayload(): string
    {
        return $this->payload;
    }

    public function getPhotoHeight(): int
    {
        return $this->photoHeight;
    }

    public function getPhotoSize(): int
    {
        return $this->photoSize;
    }

    public function getPhotoUrl(): string
    {
        return $this->photoUrl;
    }

    public function getPhotoWidth(): int
    {
        return $this->photoWidth;
    }

    public function getProviderData(): string
    {
        return $this->providerData;
    }

    public function getProviderToken(): string
    {
        return $this->providerToken;
    }

    public function getStartParameter(): string
    {
        return $this->startParameter;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'invoice' => $this->invoice->typeSerialize(),
            'title' => $this->title,
            'description' => $this->description,
            'photo_url' => $this->photoUrl,
            'photo_size' => $this->photoSize,
            'photo_width' => $this->photoWidth,
            'photo_height' => $this->photoHeight,
            'payload' => $this->payload,
            'provider_token' => $this->providerToken,
            'provider_data' => $this->providerData,
            'start_parameter' => $this->startParameter,
            'extended_media_content' => $this->extendedMediaContent->typeSerialize(),
        ];
    }
}

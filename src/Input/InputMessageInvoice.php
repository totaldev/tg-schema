<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Invoice\Invoice;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A message with an invoice; can be used only by bots.
 */
class InputMessageInvoice extends InputMessageContent
{
    public const string TYPE_NAME = 'inputMessageInvoice';

    public function __construct(
        /**
         * Product description; 0-255 characters.
         */
        protected string          $description,
        /**
         * Invoice.
         */
        protected Invoice         $invoice,
        /**
         * The invoice payload.
         */
        protected string          $payload,
        /**
         * Product photo height.
         */
        protected int             $photoHeight,
        /**
         * Product photo size.
         */
        protected int             $photoSize,
        /**
         * Product photo URL; optional.
         */
        protected string          $photoUrl,
        /**
         * Product photo width.
         */
        protected int             $photoWidth,
        /**
         * JSON-encoded data about the invoice, which will be shared with the payment provider.
         */
        protected string          $providerData,
        /**
         * Payment provider token; may be empty for payments in Telegram Stars.
         */
        protected string          $providerToken,
        /**
         * Unique invoice bot deep link parameter for the generation of this invoice. If empty, it would be possible to pay directly from forwards of the invoice message.
         */
        protected string          $startParameter,
        /**
         * Product title; 1-32 characters.
         */
        protected string          $title,
        /**
         * The content of paid media attached to the invoice; pass null if none.
         */
        protected ?InputPaidMedia $paidMedia = null,
        /**
         * Paid media caption; pass null to use an empty caption; 0-getOption("message_caption_length_max") characters.
         */
        protected ?FormattedText  $paidMediaCaption = null,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputMessageInvoice
    {
        return new static(
            description     : $array['description'],
            invoice         : TdSchemaRegistry::fromArray($array['invoice']),
            paidMedia       : (isset($array['paid_media']) ? TdSchemaRegistry::fromArray($array['paid_media']) : null),
            paidMediaCaption: (isset($array['paid_media_caption']) ? TdSchemaRegistry::fromArray($array['paid_media_caption']) : null),
            payload         : $array['payload'],
            photoHeight     : $array['photo_height'],
            photoSize       : $array['photo_size'],
            photoUrl        : $array['photo_url'],
            photoWidth      : $array['photo_width'],
            providerData    : $array['provider_data'],
            providerToken   : $array['provider_token'],
            startParameter  : $array['start_parameter'],
            title           : $array['title'],
        );
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getInvoice(): Invoice
    {
        return $this->invoice;
    }

    public function getPaidMedia(): ?InputPaidMedia
    {
        return $this->paidMedia;
    }

    public function getPaidMediaCaption(): ?FormattedText
    {
        return $this->paidMediaCaption;
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

    public function setDescription(string $value): static
    {
        $this->description = $value;

        return $this;
    }

    public function setInvoice(Invoice $value): static
    {
        $this->invoice = $value;

        return $this;
    }

    public function setPaidMedia(?InputPaidMedia $value): static
    {
        $this->paidMedia = $value;

        return $this;
    }

    public function setPaidMediaCaption(?FormattedText $value): static
    {
        $this->paidMediaCaption = $value;

        return $this;
    }

    public function setPayload(string $value): static
    {
        $this->payload = $value;

        return $this;
    }

    public function setPhotoHeight(int $value): static
    {
        $this->photoHeight = $value;

        return $this;
    }

    public function setPhotoSize(int $value): static
    {
        $this->photoSize = $value;

        return $this;
    }

    public function setPhotoUrl(string $value): static
    {
        $this->photoUrl = $value;

        return $this;
    }

    public function setPhotoWidth(int $value): static
    {
        $this->photoWidth = $value;

        return $this;
    }

    public function setProviderData(string $value): static
    {
        $this->providerData = $value;

        return $this;
    }

    public function setProviderToken(string $value): static
    {
        $this->providerToken = $value;

        return $this;
    }

    public function setStartParameter(string $value): static
    {
        $this->startParameter = $value;

        return $this;
    }

    public function setTitle(string $value): static
    {
        $this->title = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'description'        => $this->description,
            'invoice'            => $this->invoice->jsonSerialize(),
            'paid_media'         => (null !== $this->paidMedia ? $this->paidMedia->jsonSerialize() : null),
            'paid_media_caption' => (null !== $this->paidMediaCaption ? $this->paidMediaCaption->jsonSerialize() : null),
            'payload'            => $this->payload,
            'photo_height'       => $this->photoHeight,
            'photo_size'         => $this->photoSize,
            'photo_url'          => $this->photoUrl,
            'photo_width'        => $this->photoWidth,
            'provider_data'      => $this->providerData,
            'provider_token'     => $this->providerToken,
            'start_parameter'    => $this->startParameter,
            'title'              => $this->title,
        ];
    }
}

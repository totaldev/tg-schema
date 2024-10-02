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
    public const TYPE_NAME = 'inputMessageInvoice';

    public function __construct(
        /**
         * Invoice.
         */
        protected Invoice        $invoice,
        /**
         * Product title; 1-32 characters.
         */
        protected string         $title,
        /**
         * Product description; 0-255 characters.
         */
        protected string         $description,
        /**
         * Product photo URL; optional.
         */
        protected string         $photoUrl,
        /**
         * Product photo size.
         */
        protected int            $photoSize,
        /**
         * Product photo width.
         */
        protected int            $photoWidth,
        /**
         * Product photo height.
         */
        protected int            $photoHeight,
        /**
         * The invoice payload.
         */
        protected string         $payload,
        /**
         * Payment provider token; may be empty for payments in Telegram Stars.
         */
        protected string         $providerToken,
        /**
         * JSON-encoded data about the invoice, which will be shared with the payment provider.
         */
        protected string         $providerData,
        /**
         * Unique invoice bot deep link parameter for the generation of this invoice. If empty, it would be possible to pay directly from forwards of the invoice message.
         */
        protected string         $startParameter,
        /**
         * The content of paid media attached to the invoice; pass null if none.
         */
        protected InputPaidMedia $paidMedia,
        /**
         * Paid media caption; pass null to use an empty caption; 0-getOption("message_caption_length_max") characters.
         */
        protected FormattedText  $paidMediaCaption,
    ) {
        parent::__construct();
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
            TdSchemaRegistry::fromArray($array['paid_media']),
            TdSchemaRegistry::fromArray($array['paid_media_caption']),
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

    public function getPaidMedia(): InputPaidMedia
    {
        return $this->paidMedia;
    }

    public function getPaidMediaCaption(): FormattedText
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

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'invoice'            => $this->invoice->typeSerialize(),
            'title'              => $this->title,
            'description'        => $this->description,
            'photo_url'          => $this->photoUrl,
            'photo_size'         => $this->photoSize,
            'photo_width'        => $this->photoWidth,
            'photo_height'       => $this->photoHeight,
            'payload'            => $this->payload,
            'provider_token'     => $this->providerToken,
            'provider_data'      => $this->providerData,
            'start_parameter'    => $this->startParameter,
            'paid_media'         => $this->paidMedia->typeSerialize(),
            'paid_media_caption' => $this->paidMediaCaption->typeSerialize(),
        ];
    }
}

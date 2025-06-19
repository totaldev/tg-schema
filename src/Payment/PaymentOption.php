<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Payment;

use Totaldev\TgSchema\TdObject;

/**
 * Describes an additional payment option.
 */
class PaymentOption extends TdObject
{
    public const TYPE_NAME = 'paymentOption';

    public function __construct(
        /**
         * Title for the payment option.
         */
        protected string $title,
        /**
         * Payment form URL to be opened in a web view.
         */
        protected string $url
    ) {}

    public static function fromArray(array $array): PaymentOption
    {
        return new static(
            $array['title'],
            $array['url'],
        );
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'title' => $this->title,
            'url'   => $this->url,
        ];
    }
}

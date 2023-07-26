<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Describes an additional payment option
 */
class PaymentOption extends TdObject
{
    public const TYPE_NAME = 'paymentOption';

    /**
     * Title for the payment option
     *
     * @var string
     */
    protected string $title;

    /**
     * Payment form URL to be opened in a web view
     *
     * @var string
     */
    protected string $url;

    public function __construct(string $title, string $url)
    {
        $this->title = $title;
        $this->url = $url;
    }

    public static function fromArray(array $array): PaymentOption
    {
        return new static(
            $array['title'],
            $array['url'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'title' => $this->title,
            'url' => $this->url,
        ];
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getUrl(): string
    {
        return $this->url;
    }
}

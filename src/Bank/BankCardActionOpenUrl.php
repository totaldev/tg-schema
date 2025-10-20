<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Bank;

use Totaldev\TgSchema\TdObject;

/**
 * Describes an action associated with a bank card number.
 */
class BankCardActionOpenUrl extends TdObject
{
    public const TYPE_NAME = 'bankCardActionOpenUrl';

    public function __construct(
        /**
         * Action text.
         */
        protected string $text,
        /**
         * The URL to be opened.
         */
        protected string $url,
    ) {}

    public static function fromArray(array $array): BankCardActionOpenUrl
    {
        return new static(
            $array['text'],
            $array['url'],
        );
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'text'  => $this->text,
            'url'   => $this->url,
        ];
    }
}

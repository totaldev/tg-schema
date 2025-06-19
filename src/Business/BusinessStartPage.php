<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Business;

use Totaldev\TgSchema\Sticker\Sticker;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes settings for a business account start page.
 */
class BusinessStartPage extends TdObject
{
    public const TYPE_NAME = 'businessStartPage';

    public function __construct(
        /**
         * Title text of the start page.
         */
        protected string   $title,
        /**
         * Message text of the start page.
         */
        protected string   $message,
        /**
         * Greeting sticker of the start page; may be null if none.
         */
        protected ?Sticker $sticker
    ) {}

    public static function fromArray(array $array): BusinessStartPage
    {
        return new static(
            $array['title'],
            $array['message'],
            isset($array['sticker']) ? TdSchemaRegistry::fromArray($array['sticker']) : null,
        );
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getSticker(): ?Sticker
    {
        return $this->sticker;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'title'   => $this->title,
            'message' => $this->message,
            'sticker' => (isset($this->sticker) ? $this->sticker : null),
        ];
    }
}

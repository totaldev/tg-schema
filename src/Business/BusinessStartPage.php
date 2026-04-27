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
    public const string TYPE_NAME = 'businessStartPage';

    public function __construct(
        /**
         * Message text of the start page.
         */
        protected string   $message,
        /**
         * Greeting sticker of the start page; may be null if none.
         */
        protected ?Sticker $sticker,
        /**
         * Title text of the start page.
         */
        protected string   $title,
    ) {}

    public static function fromArray(array $array): BusinessStartPage
    {
        return new static(
            message: $array['message'],
            sticker: (isset($array['sticker']) ? TdSchemaRegistry::fromArray($array['sticker']) : null),
            title  : $array['title'],
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

    public function setMessage(string $value): static
    {
        $this->message = $value;

        return $this;
    }

    public function setSticker(?Sticker $value): static
    {
        $this->sticker = $value;

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
            '@type'   => static::TYPE_NAME,
            'message' => $this->message,
            'sticker' => (null !== $this->sticker ? $this->sticker->jsonSerialize() : null),
            'title'   => $this->title,
        ];
    }
}

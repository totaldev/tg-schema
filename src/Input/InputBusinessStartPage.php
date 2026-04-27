<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes settings for a business account start page to set.
 */
class InputBusinessStartPage extends TdObject
{
    public const string TYPE_NAME = 'inputBusinessStartPage';

    public function __construct(
        /**
         * Message text of the start page; 0-getOption("business_start_page_message_length_max") characters.
         */
        protected string     $message,
        /**
         * Title text of the start page; 0-getOption("business_start_page_title_length_max") characters.
         */
        protected string     $title,
        /**
         * Greeting sticker of the start page; pass null if none. The sticker must belong to a sticker set and must not be a custom emoji.
         */
        protected ?InputFile $sticker = null,
    ) {}

    public static function fromArray(array $array): InputBusinessStartPage
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

    public function getSticker(): ?InputFile
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

    public function setSticker(?InputFile $value): static
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

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
    public const TYPE_NAME = 'inputBusinessStartPage';

    public function __construct(
        /**
         * Title text of the start page; 0-getOption("business_start_page_title_length_max") characters.
         */
        protected string    $title,
        /**
         * Message text of the start page; 0-getOption("business_start_page_message_length_max") characters.
         */
        protected string    $message,
        /**
         * Greeting sticker of the start page; pass null if none. The sticker must belong to a sticker set and must not be a custom emoji.
         */
        protected InputFile $sticker
    ) {}

    public static function fromArray(array $array): InputBusinessStartPage
    {
        return new static(
            $array['title'],
            $array['message'],
            TdSchemaRegistry::fromArray($array['sticker']),
        );
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getSticker(): InputFile
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
            'sticker' => $this->sticker->typeSerialize(),
        ];
    }
}

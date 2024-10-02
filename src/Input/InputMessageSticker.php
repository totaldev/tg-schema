<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A sticker message.
 */
class InputMessageSticker extends InputMessageContent
{
    public const TYPE_NAME = 'inputMessageSticker';

    public function __construct(
        /**
         * Sticker to be sent.
         */
        protected InputFile      $sticker,
        /**
         * Sticker thumbnail; pass null to skip thumbnail uploading.
         */
        protected InputThumbnail $thumbnail,
        /**
         * Sticker width.
         */
        protected int            $width,
        /**
         * Sticker height.
         */
        protected int            $height,
        /**
         * Emoji used to choose the sticker.
         */
        protected string         $emoji,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputMessageSticker
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sticker']),
            TdSchemaRegistry::fromArray($array['thumbnail']),
            $array['width'],
            $array['height'],
            $array['emoji'],
        );
    }

    public function getEmoji(): string
    {
        return $this->emoji;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getSticker(): InputFile
    {
        return $this->sticker;
    }

    public function getThumbnail(): InputThumbnail
    {
        return $this->thumbnail;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'sticker'   => $this->sticker->typeSerialize(),
            'thumbnail' => $this->thumbnail->typeSerialize(),
            'width'     => $this->width,
            'height'    => $this->height,
            'emoji'     => $this->emoji,
        ];
    }
}

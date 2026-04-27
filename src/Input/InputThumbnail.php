<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A thumbnail to be sent along with a file; must be in JPEG or WEBP format for stickers, and less than 200 KB in size.
 */
class InputThumbnail extends TdObject
{
    public const string TYPE_NAME = 'inputThumbnail';

    public function __construct(
        /**
         * Thumbnail height, usually shouldn't exceed 320. Use 0 if unknown.
         */
        protected int       $height,
        /**
         * Thumbnail file to send. Sending thumbnails by file_id is currently not supported.
         */
        protected InputFile $thumbnail,
        /**
         * Thumbnail width, usually shouldn't exceed 320. Use 0 if unknown.
         */
        protected int       $width,
    ) {}

    public static function fromArray(array $array): InputThumbnail
    {
        return new static(
            height   : $array['height'],
            thumbnail: TdSchemaRegistry::fromArray($array['thumbnail']),
            width    : $array['width'],
        );
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getThumbnail(): InputFile
    {
        return $this->thumbnail;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function setHeight(int $value): static
    {
        $this->height = $value;

        return $this;
    }

    public function setThumbnail(InputFile $value): static
    {
        $this->thumbnail = $value;

        return $this;
    }

    public function setWidth(int $value): static
    {
        $this->width = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'height'    => $this->height,
            'thumbnail' => $this->thumbnail->jsonSerialize(),
            'width'     => $this->width,
        ];
    }
}

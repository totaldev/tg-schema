<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Minithumbnail;

use Totaldev\TgSchema\TdObject;

/**
 * Thumbnail image of a very poor quality and low resolution.
 */
class Minithumbnail extends TdObject
{
    public const string TYPE_NAME = 'minithumbnail';

    public function __construct(
        /**
         * The thumbnail in JPEG format.
         */
        protected string $data,
        /**
         * Thumbnail height, usually doesn't exceed 40.
         */
        protected int    $height,
        /**
         * Thumbnail width, usually doesn't exceed 40.
         */
        protected int    $width,
    ) {}

    public static function fromArray(array $array): Minithumbnail
    {
        return new static(
            data  : $array['data'],
            height: $array['height'],
            width : $array['width'],
        );
    }

    public function getData(): string
    {
        return $this->data;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function setData(string $value): static
    {
        $this->data = $value;

        return $this;
    }

    public function setHeight(int $value): static
    {
        $this->height = $value;

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
            '@type'  => static::TYPE_NAME,
            'data'   => $this->data,
            'height' => $this->height,
            'width'  => $this->width,
        ];
    }
}

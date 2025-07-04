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
    public const TYPE_NAME = 'minithumbnail';

    public function __construct(
        /**
         * Thumbnail width, usually doesn't exceed 40.
         */
        protected int    $width,
        /**
         * Thumbnail height, usually doesn't exceed 40.
         */
        protected int    $height,
        /**
         * The thumbnail in JPEG format.
         */
        protected string $data
    ) {}

    public static function fromArray(array $array): Minithumbnail
    {
        return new static(
            $array['width'],
            $array['height'],
            $array['data'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'width'  => $this->width,
            'height' => $this->height,
            'data'   => $this->data,
        ];
    }
}

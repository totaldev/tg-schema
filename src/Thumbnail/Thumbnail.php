<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Thumbnail;

use Totaldev\TgSchema\File\File;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a thumbnail.
 */
class Thumbnail extends TdObject
{
    public const TYPE_NAME = 'thumbnail';

    public function __construct(
        /**
         * Thumbnail format.
         */
        protected ThumbnailFormat $format,
        /**
         * Thumbnail width.
         */
        protected int             $width,
        /**
         * Thumbnail height.
         */
        protected int             $height,
        /**
         * The thumbnail.
         */
        protected File            $file,
    ) {}

    public static function fromArray(array $array): Thumbnail
    {
        return new static(
            TdSchemaRegistry::fromArray($array['format']),
            $array['width'],
            $array['height'],
            TdSchemaRegistry::fromArray($array['file']),
        );
    }

    public function getFile(): File
    {
        return $this->file;
    }

    public function getFormat(): ThumbnailFormat
    {
        return $this->format;
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
            'format' => $this->format->typeSerialize(),
            'width'  => $this->width,
            'height' => $this->height,
            'file'   => $this->file->typeSerialize(),
        ];
    }
}

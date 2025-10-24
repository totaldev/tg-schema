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
    public const string TYPE_NAME = 'thumbnail';

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

    public function setFile(File $value): static
    {
        $this->file = $value;

        return $this;
    }

    public function setFormat(ThumbnailFormat $value): static
    {
        $this->format = $value;

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
            'format' => $this->format->typeSerialize(),
            'width'  => $this->width,
            'height' => $this->height,
            'file'   => $this->file->typeSerialize(),
        ];
    }
}

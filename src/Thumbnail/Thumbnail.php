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
         * The thumbnail.
         */
        protected File            $file,
        /**
         * Thumbnail format.
         */
        protected ThumbnailFormat $format,
        /**
         * Thumbnail height.
         */
        protected int             $height,
        /**
         * Thumbnail width.
         */
        protected int             $width,
    ) {}

    public static function fromArray(array $array): Thumbnail
    {
        return new static(
            file  : TdSchemaRegistry::fromArray($array['file']),
            format: TdSchemaRegistry::fromArray($array['format']),
            height: $array['height'],
            width : $array['width'],
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
            'file'   => $this->file->jsonSerialize(),
            'format' => $this->format->jsonSerialize(),
            'height' => $this->height,
            'width'  => $this->width,
        ];
    }
}

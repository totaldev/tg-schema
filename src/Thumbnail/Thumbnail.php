<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Thumbnail;

use Totaldev\TgSchema\File\File;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a thumbnail
 */
class Thumbnail extends TdObject
{
    public const TYPE_NAME = 'thumbnail';

    /**
     * The thumbnail
     *
     * @var File
     */
    protected File $file;

    /**
     * Thumbnail format
     *
     * @var ThumbnailFormat
     */
    protected ThumbnailFormat $format;

    /**
     * Thumbnail height
     *
     * @var int
     */
    protected int $height;

    /**
     * Thumbnail width
     *
     * @var int
     */
    protected int $width;

    public function __construct(ThumbnailFormat $format, int $width, int $height, File $file)
    {
        $this->format = $format;
        $this->width = $width;
        $this->height = $height;
        $this->file = $file;
    }

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
            '@type' => static::TYPE_NAME,
            'format' => $this->format->typeSerialize(),
            'width' => $this->width,
            'height' => $this->height,
            'file' => $this->file->typeSerialize(),
        ];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A thumbnail to be sent along with a file; must be in JPEG or WEBP format for stickers, and less than 200 KB in size
 */
class InputThumbnail extends TdObject
{
    public const TYPE_NAME = 'inputThumbnail';

    /**
     * Thumbnail height, usually shouldn't exceed 320. Use 0 if unknown
     *
     * @var int
     */
    protected int $height;

    /**
     * Thumbnail file to send. Sending thumbnails by file_id is currently not supported
     *
     * @var InputFile
     */
    protected InputFile $thumbnail;

    /**
     * Thumbnail width, usually shouldn't exceed 320. Use 0 if unknown
     *
     * @var int
     */
    protected int $width;

    public function __construct(InputFile $thumbnail, int $width, int $height)
    {
        $this->thumbnail = $thumbnail;
        $this->width = $width;
        $this->height = $height;
    }

    public static function fromArray(array $array): InputThumbnail
    {
        return new static(
            TdSchemaRegistry::fromArray($array['thumbnail']),
            $array['width'],
            $array['height'],
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'thumbnail' => $this->thumbnail->typeSerialize(),
            'width' => $this->width,
            'height' => $this->height,
        ];
    }
}

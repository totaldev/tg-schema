<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Photo;

use Totaldev\TgSchema\File\File;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes an image in JPEG format
 */
class PhotoSize extends TdObject
{
    public const TYPE_NAME = 'photoSize';

    /**
     * Image height
     *
     * @var int
     */
    protected int $height;

    /**
     * Information about the image file
     *
     * @var File
     */
    protected File $photo;

    /**
     * Sizes of progressive JPEG file prefixes, which can be used to preliminarily show the image; in bytes
     *
     * @var int[]
     */
    protected array $progressiveSizes;

    /**
     * Image type (see https://core.telegram.org/constructor/photoSize)
     *
     * @var string
     */
    protected string $type;

    /**
     * Image width
     *
     * @var int
     */
    protected int $width;

    public function __construct(string $type, File $photo, int $width, int $height, array $progressiveSizes)
    {
        $this->type = $type;
        $this->photo = $photo;
        $this->width = $width;
        $this->height = $height;
        $this->progressiveSizes = $progressiveSizes;
    }

    public static function fromArray(array $array): PhotoSize
    {
        return new static(
            $array['type'],
            TdSchemaRegistry::fromArray($array['photo']),
            $array['width'],
            $array['height'],
            $array['progressive_sizes'],
        );
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getPhoto(): File
    {
        return $this->photo;
    }

    public function getProgressiveSizes(): array
    {
        return $this->progressiveSizes;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'type' => $this->type,
            'photo' => $this->photo->typeSerialize(),
            'width' => $this->width,
            'height' => $this->height,
            'progressive_sizes' => $this->progressiveSizes,
        ];
    }
}

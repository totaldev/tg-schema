<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Photo;

use Totaldev\TgSchema\File\File;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes an image in JPEG format.
 */
class PhotoSize extends TdObject
{
    public const string TYPE_NAME = 'photoSize';

    public function __construct(
        /**
         * Image type (see https://core.telegram.org/constructor/photoSize).
         */
        protected string $type,
        /**
         * Information about the image file.
         */
        protected File   $photo,
        /**
         * Image width.
         */
        protected int    $width,
        /**
         * Image height.
         */
        protected int    $height,
        /**
         * Sizes of progressive JPEG file prefixes, which can be used to preliminarily show the image; in bytes.
         *
         * @var int[]
         */
        protected array  $progressiveSizes,
    ) {}

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

    public function setHeight(int $value): static
    {
        $this->height = $value;

        return $this;
    }

    public function setPhoto(File $value): static
    {
        $this->photo = $value;

        return $this;
    }

    public function setProgressiveSizes(array $value): static
    {
        $this->progressiveSizes = $value;

        return $this;
    }

    public function setType(string $value): static
    {
        $this->type = $value;

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
            '@type'             => static::TYPE_NAME,
            'type'              => $this->type,
            'photo'             => $this->photo->typeSerialize(),
            'width'             => $this->width,
            'height'            => $this->height,
            'progressive_sizes' => $this->progressiveSizes,
        ];
    }
}

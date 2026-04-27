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
         * Image height.
         */
        protected int    $height,
        /**
         * Information about the image file.
         */
        protected File   $photo,
        /**
         * Sizes of progressive JPEG file prefixes, which can be used to preliminarily show the image; in bytes.
         *
         * @var int[]
         */
        protected array  $progressiveSizes,
        /**
         * Image type (see https://core.telegram.org/constructor/photoSize).
         */
        protected string $type,
        /**
         * Image width.
         */
        protected int    $width,
    ) {}

    public static function fromArray(array $array): PhotoSize
    {
        return new static(
            height          : $array['height'],
            photo           : TdSchemaRegistry::fromArray($array['photo']),
            progressiveSizes: $array['progressive_sizes'],
            type            : $array['type'],
            width           : $array['width'],
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
            'height'            => $this->height,
            'photo'             => $this->photo->jsonSerialize(),
            'progressive_sizes' => $this->progressiveSizes,
            'type'              => $this->type,
            'width'             => $this->width,
        ];
    }
}

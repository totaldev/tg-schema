<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a paid media to be sent.
 */
class InputPaidMedia extends TdObject
{
    public const string TYPE_NAME = 'inputPaidMedia';

    public function __construct(
        /**
         * File identifiers of the stickers added to the media, if applicable.
         *
         * @var int[]
         */
        protected array              $addedStickerFileIds,
        /**
         * Media height.
         */
        protected int                $height,
        /**
         * Photo or video to be sent.
         */
        protected InputFile          $media,
        /**
         * Type of the media.
         */
        protected InputPaidMediaType $type,
        /**
         * Media width.
         */
        protected int                $width,
        /**
         * Media thumbnail; pass null to skip thumbnail uploading.
         */
        protected ?InputThumbnail    $thumbnail = null,
    ) {}

    public static function fromArray(array $array): InputPaidMedia
    {
        return new static(
            addedStickerFileIds: $array['added_sticker_file_ids'],
            height             : $array['height'],
            media              : TdSchemaRegistry::fromArray($array['media']),
            thumbnail          : (isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null),
            type               : TdSchemaRegistry::fromArray($array['type']),
            width              : $array['width'],
        );
    }

    public function getAddedStickerFileIds(): array
    {
        return $this->addedStickerFileIds;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getMedia(): InputFile
    {
        return $this->media;
    }

    public function getThumbnail(): ?InputThumbnail
    {
        return $this->thumbnail;
    }

    public function getType(): InputPaidMediaType
    {
        return $this->type;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function setAddedStickerFileIds(array $value): static
    {
        $this->addedStickerFileIds = $value;

        return $this;
    }

    public function setHeight(int $value): static
    {
        $this->height = $value;

        return $this;
    }

    public function setMedia(InputFile $value): static
    {
        $this->media = $value;

        return $this;
    }

    public function setThumbnail(?InputThumbnail $value): static
    {
        $this->thumbnail = $value;

        return $this;
    }

    public function setType(InputPaidMediaType $value): static
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
            '@type'                  => static::TYPE_NAME,
            'added_sticker_file_ids' => $this->addedStickerFileIds,
            'height'                 => $this->height,
            'media'                  => $this->media->jsonSerialize(),
            'thumbnail'              => (null !== $this->thumbnail ? $this->thumbnail->jsonSerialize() : null),
            'type'                   => $this->type->jsonSerialize(),
            'width'                  => $this->width,
        ];
    }
}

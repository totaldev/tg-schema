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
    public const TYPE_NAME = 'inputPaidMedia';

    public function __construct(
        /**
         * Type of the media.
         */
        protected InputPaidMediaType $type,
        /**
         * Photo or video to be sent.
         */
        protected InputFile          $media,
        /**
         * File identifiers of the stickers added to the media, if applicable.
         *
         * @var int[]
         */
        protected array              $addedStickerFileIds,
        /**
         * Media width.
         */
        protected int                $width,
        /**
         * Media height.
         */
        protected int                $height,
        /**
         * Media thumbnail; pass null to skip thumbnail uploading.
         */
        protected ?InputThumbnail    $thumbnail = null,
    ) {}

    public static function fromArray(array $array): InputPaidMedia
    {
        return new static(
            TdSchemaRegistry::fromArray($array['type']),
            TdSchemaRegistry::fromArray($array['media']),
            isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null,
            $array['added_sticker_file_ids'],
            $array['width'],
            $array['height'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'type'                   => $this->type->typeSerialize(),
            'media'                  => $this->media->typeSerialize(),
            'thumbnail'              => $this->thumbnail ?? null,
            'added_sticker_file_ids' => $this->addedStickerFileIds,
            'width'                  => $this->width,
            'height'                 => $this->height,
        ];
    }
}

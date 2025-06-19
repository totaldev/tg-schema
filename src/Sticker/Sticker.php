<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Sticker;

use Totaldev\TgSchema\File\File;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Thumbnail\Thumbnail;

/**
 * Describes a sticker.
 */
class Sticker extends TdObject
{
    public const TYPE_NAME = 'sticker';

    public function __construct(
        /**
         * Unique sticker identifier within the set; 0 if none.
         */
        protected int             $id,
        /**
         * Identifier of the sticker set to which the sticker belongs; 0 if none.
         */
        protected int             $setId,
        /**
         * Sticker width; as defined by the sender.
         */
        protected int             $width,
        /**
         * Sticker height; as defined by the sender.
         */
        protected int             $height,
        /**
         * Emoji corresponding to the sticker.
         */
        protected string          $emoji,
        /**
         * Sticker format.
         */
        protected StickerFormat   $format,
        /**
         * Sticker's full type.
         */
        protected StickerFullType $fullType,
        /**
         * Sticker thumbnail in WEBP or JPEG format; may be null.
         */
        protected ?Thumbnail      $thumbnail,
        /**
         * File containing the sticker.
         */
        protected File            $sticker,
    ) {}

    public static function fromArray(array $array): Sticker
    {
        return new static(
            $array['id'],
            $array['set_id'],
            $array['width'],
            $array['height'],
            $array['emoji'],
            TdSchemaRegistry::fromArray($array['format']),
            TdSchemaRegistry::fromArray($array['full_type']),
            isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null,
            TdSchemaRegistry::fromArray($array['sticker']),
        );
    }

    public function getEmoji(): string
    {
        return $this->emoji;
    }

    public function getFormat(): StickerFormat
    {
        return $this->format;
    }

    public function getFullType(): StickerFullType
    {
        return $this->fullType;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getSetId(): int
    {
        return $this->setId;
    }

    public function getSticker(): File
    {
        return $this->sticker;
    }

    public function getThumbnail(): ?Thumbnail
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
            '@type'     => static::TYPE_NAME,
            'id'        => $this->id,
            'set_id'    => $this->setId,
            'width'     => $this->width,
            'height'    => $this->height,
            'emoji'     => $this->emoji,
            'format'    => $this->format->typeSerialize(),
            'full_type' => $this->fullType->typeSerialize(),
            'thumbnail' => (isset($this->thumbnail) ? $this->thumbnail : null),
            'sticker'   => $this->sticker->typeSerialize(),
        ];
    }
}

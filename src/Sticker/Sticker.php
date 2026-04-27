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
    public const string TYPE_NAME = 'sticker';

    public function __construct(
        /**
         * Emoji corresponding to the sticker; may be empty if unknown.
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
         * Sticker height; as defined by the sender.
         */
        protected int             $height,
        /**
         * Unique sticker identifier within the set; 0 if none.
         */
        protected int             $id,
        /**
         * Identifier of the sticker set to which the sticker belongs; 0 if none.
         */
        protected int             $setId,
        /**
         * File containing the sticker.
         */
        protected File            $sticker,
        /**
         * Sticker thumbnail in WEBP or JPEG format; may be null.
         */
        protected ?Thumbnail      $thumbnail,
        /**
         * Sticker width; as defined by the sender.
         */
        protected int             $width,
    ) {}

    public static function fromArray(array $array): Sticker
    {
        return new static(
            emoji    : $array['emoji'],
            format   : TdSchemaRegistry::fromArray($array['format']),
            fullType : TdSchemaRegistry::fromArray($array['full_type']),
            height   : $array['height'],
            id       : $array['id'],
            setId    : $array['set_id'],
            sticker  : TdSchemaRegistry::fromArray($array['sticker']),
            thumbnail: (isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null),
            width    : $array['width'],
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

    public function setEmoji(string $value): static
    {
        $this->emoji = $value;

        return $this;
    }

    public function setFormat(StickerFormat $value): static
    {
        $this->format = $value;

        return $this;
    }

    public function setFullType(StickerFullType $value): static
    {
        $this->fullType = $value;

        return $this;
    }

    public function setHeight(int $value): static
    {
        $this->height = $value;

        return $this;
    }

    public function setId(int $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setSetId(int $value): static
    {
        $this->setId = $value;

        return $this;
    }

    public function setSticker(File $value): static
    {
        $this->sticker = $value;

        return $this;
    }

    public function setThumbnail(?Thumbnail $value): static
    {
        $this->thumbnail = $value;

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
            '@type'     => static::TYPE_NAME,
            'emoji'     => $this->emoji,
            'format'    => $this->format->jsonSerialize(),
            'full_type' => $this->fullType->jsonSerialize(),
            'height'    => $this->height,
            'id'        => $this->id,
            'set_id'    => $this->setId,
            'sticker'   => $this->sticker->jsonSerialize(),
            'thumbnail' => (null !== $this->thumbnail ? $this->thumbnail->jsonSerialize() : null),
            'width'     => $this->width,
        ];
    }
}

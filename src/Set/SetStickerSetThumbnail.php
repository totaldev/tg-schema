<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Input\InputFile;
use Totaldev\TgSchema\Sticker\StickerFormat;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sets a sticker set thumbnail.
 */
class SetStickerSetThumbnail extends TdFunction
{
    public const string TYPE_NAME = 'setStickerSetThumbnail';

    public function __construct(
        /**
         * Sticker set name. The sticker set must be owned by the current user.
         */
        protected string         $name,
        /**
         * Sticker set owner; ignored for regular users.
         */
        protected int            $userId,
        /**
         * Format of the thumbnail; pass null if thumbnail is removed.
         */
        protected ?StickerFormat $format = null,
        /**
         * Thumbnail to set; pass null to remove the sticker set thumbnail.
         */
        protected ?InputFile     $thumbnail = null,
    ) {}

    public static function fromArray(array $array): SetStickerSetThumbnail
    {
        return new static(
            format   : (isset($array['format']) ? TdSchemaRegistry::fromArray($array['format']) : null),
            name     : $array['name'],
            thumbnail: (isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null),
            userId   : $array['user_id'],
        );
    }

    public function getFormat(): ?StickerFormat
    {
        return $this->format;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getThumbnail(): ?InputFile
    {
        return $this->thumbnail;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setFormat(?StickerFormat $value): static
    {
        $this->format = $value;

        return $this;
    }

    public function setName(string $value): static
    {
        $this->name = $value;

        return $this;
    }

    public function setThumbnail(?InputFile $value): static
    {
        $this->thumbnail = $value;

        return $this;
    }

    public function setUserId(int $value): static
    {
        $this->userId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'format'    => (null !== $this->format ? $this->format->jsonSerialize() : null),
            'name'      => $this->name,
            'thumbnail' => (null !== $this->thumbnail ? $this->thumbnail->jsonSerialize() : null),
            'user_id'   => $this->userId,
        ];
    }
}

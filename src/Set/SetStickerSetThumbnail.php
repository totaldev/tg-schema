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
    public const TYPE_NAME = 'setStickerSetThumbnail';

    public function __construct(
        /**
         * Sticker set owner; ignored for regular users.
         */
        protected int           $userId,
        /**
         * Sticker set name. The sticker set must be owned by the current user.
         */
        protected string        $name,
        /**
         * Thumbnail to set; pass null to remove the sticker set thumbnail.
         */
        protected InputFile     $thumbnail,
        /**
         * Format of the thumbnail; pass null if thumbnail is removed.
         */
        protected StickerFormat $format
    ) {}

    public static function fromArray(array $array): SetStickerSetThumbnail
    {
        return new static(
            $array['user_id'],
            $array['name'],
            TdSchemaRegistry::fromArray($array['thumbnail']),
            TdSchemaRegistry::fromArray($array['format']),
        );
    }

    public function getFormat(): StickerFormat
    {
        return $this->format;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getThumbnail(): InputFile
    {
        return $this->thumbnail;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'user_id'   => $this->userId,
            'name'      => $this->name,
            'thumbnail' => $this->thumbnail->typeSerialize(),
            'format'    => $this->format->typeSerialize(),
        ];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns a list of sticker sets attached to a file, including regular, mask, and emoji sticker sets. Currently, only animations, photos, and videos can have
 * attached sticker sets.
 */
class GetAttachedStickerSets extends TdFunction
{
    public const TYPE_NAME = 'getAttachedStickerSets';

    public function __construct(
        /**
         * File identifier.
         */
        protected int $fileId
    ) {}

    public static function fromArray(array $array): GetAttachedStickerSets
    {
        return new static(
            $array['file_id'],
        );
    }

    public function getFileId(): int
    {
        return $this->fileId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'file_id' => $this->fileId,
        ];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns a list of sticker sets attached to a file, including regular, mask, and emoji sticker sets. Currently, only animations, photos, and videos can have attached sticker sets
 */
class GetAttachedStickerSets extends TdFunction
{
    public const TYPE_NAME = 'getAttachedStickerSets';

    /**
     * File identifier
     *
     * @var int
     */
    protected int $fileId;

    public function __construct(int $fileId)
    {
        $this->fileId = $fileId;
    }

    public static function fromArray(array $array): GetAttachedStickerSets
    {
        return new static(
            $array['file_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'file_id' => $this->fileId,
        ];
    }

    public function getFileId(): int
    {
        return $this->fileId;
    }
}

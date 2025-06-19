<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Sticker\StickerType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns a list of archived sticker sets.
 */
class GetArchivedStickerSets extends TdFunction
{
    public const TYPE_NAME = 'getArchivedStickerSets';

    public function __construct(
        /**
         * Type of the sticker sets to return.
         */
        protected StickerType $stickerType,
        /**
         * Identifier of the sticker set from which to return the result; use 0 to get results from the beginning.
         */
        protected int         $offsetStickerSetId,
        /**
         * The maximum number of sticker sets to return; up to 100.
         */
        protected int         $limit
    ) {}

    public static function fromArray(array $array): GetArchivedStickerSets
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sticker_type']),
            $array['offset_sticker_set_id'],
            $array['limit'],
        );
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getOffsetStickerSetId(): int
    {
        return $this->offsetStickerSetId;
    }

    public function getStickerType(): StickerType
    {
        return $this->stickerType;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'sticker_type'          => $this->stickerType->typeSerialize(),
            'offset_sticker_set_id' => $this->offsetStickerSetId,
            'limit'                 => $this->limit,
        ];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns sticker sets owned by the current user.
 */
class GetOwnedStickerSets extends TdFunction
{
    public const TYPE_NAME = 'getOwnedStickerSets';

    public function __construct(
        /**
         * Identifier of the sticker set from which to return owned sticker sets; use 0 to get results from the beginning.
         */
        protected int $offsetStickerSetId,
        /**
         * The maximum number of sticker sets to be returned; must be positive and can't be greater than 100. For optimal performance, the number of returned objects is chosen by TDLib and can be smaller than the specified limit.
         */
        protected int $limit,
    ) {}

    public static function fromArray(array $array): GetOwnedStickerSets
    {
        return new static(
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

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'offset_sticker_set_id' => $this->offsetStickerSetId,
            'limit'                 => $this->limit,
        ];
    }
}

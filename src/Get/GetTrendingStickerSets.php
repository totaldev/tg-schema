<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Sticker\StickerType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns a list of trending sticker sets. For optimal performance, the number of returned sticker sets is chosen by TDLib.
 */
class GetTrendingStickerSets extends TdFunction
{
    public const TYPE_NAME = 'getTrendingStickerSets';

    public function __construct(
        /**
         * Type of the sticker sets to return.
         */
        protected StickerType $stickerType,
        /**
         * The offset from which to return the sticker sets; must be non-negative.
         */
        protected int         $offset,
        /**
         * The maximum number of sticker sets to be returned; up to 100. For optimal performance, the number of returned sticker sets is chosen by TDLib and can be smaller than the specified limit, even if the end of the list has not been reached.
         */
        protected int         $limit,
    ) {}

    public static function fromArray(array $array): GetTrendingStickerSets
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sticker_type']),
            $array['offset'],
            $array['limit'],
        );
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }

    public function getStickerType(): StickerType
    {
        return $this->stickerType;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'sticker_type' => $this->stickerType->typeSerialize(),
            'offset'       => $this->offset,
            'limit'        => $this->limit,
        ];
    }
}

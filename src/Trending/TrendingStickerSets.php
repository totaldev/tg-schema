<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Trending;

use Totaldev\TgSchema\Sticker\StickerSetInfo;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a list of trending sticker sets.
 */
class TrendingStickerSets extends TdObject
{
    public const TYPE_NAME = 'trendingStickerSets';

    public function __construct(
        /**
         * Approximate total number of trending sticker sets.
         */
        protected int   $totalCount,
        /**
         * List of trending sticker sets.
         *
         * @var StickerSetInfo[]
         */
        protected array $sets,
        /**
         * True, if the list contains sticker sets with premium stickers.
         */
        protected bool  $isPremium
    ) {}

    public static function fromArray(array $array): TrendingStickerSets
    {
        return new static(
            $array['total_count'],
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['sets']),
            $array['is_premium'],
        );
    }

    public function getIsPremium(): bool
    {
        return $this->isPremium;
    }

    public function getSets(): array
    {
        return $this->sets;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'total_count' => $this->totalCount,
            'sets'        => array_map(static fn($x) => $x->typeSerialize(), $this->sets),
            'is_premium'  => $this->isPremium,
        ];
    }
}

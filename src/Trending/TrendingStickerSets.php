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
    public const string TYPE_NAME = 'trendingStickerSets';

    public function __construct(
        /**
         * True, if the list contains sticker sets with premium stickers.
         */
        protected bool  $isPremium,
        /**
         * List of trending sticker sets.
         *
         * @var StickerSetInfo[]
         */
        protected array $sets,
        /**
         * Approximate total number of trending sticker sets.
         */
        protected int   $totalCount,
    ) {}

    public static function fromArray(array $array): TrendingStickerSets
    {
        return new static(
            isPremium : $array['is_premium'],
            sets      : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['sets']),
            totalCount: $array['total_count'],
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

    public function setIsPremium(bool $value): static
    {
        $this->isPremium = $value;

        return $this;
    }

    public function setSets(array $value): static
    {
        $this->sets = $value;

        return $this;
    }

    public function setTotalCount(int $value): static
    {
        $this->totalCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'is_premium'  => $this->isPremium,
            'sets'        => array_map(static fn($x) => $x->jsonSerialize(), $this->sets),
            'total_count' => $this->totalCount,
        ];
    }
}

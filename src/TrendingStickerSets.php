<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Represents a list of trending sticker sets
 */
class TrendingStickerSets extends TdObject
{
    public const TYPE_NAME = 'trendingStickerSets';

    /**
     * Approximate total number of trending sticker sets
     *
     * @var int
     */
    protected int $totalCount;

    /**
     * List of trending sticker sets
     *
     * @var StickerSetInfo[]
     */
    protected array $sets;

    /**
     * True, if the list contains sticker sets with premium stickers
     *
     * @var bool
     */
    protected bool $isPremium;

    public function __construct(int $totalCount, array $sets, bool $isPremium)
    {
        $this->totalCount = $totalCount;
        $this->sets = $sets;
        $this->isPremium = $isPremium;
    }

    public static function fromArray(array $array): TrendingStickerSets
    {
        return new static(
            $array['total_count'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['sets']),
            $array['is_premium'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'total_count' => $this->totalCount,
            array_map(fn($x) => $x->typeSerialize(), $this->sets),
            'is_premium' => $this->isPremium,
        ];
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function getSets(): array
    {
        return $this->sets;
    }

    public function getIsPremium(): bool
    {
        return $this->isPremium;
    }
}

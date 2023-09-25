<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Sticker\StickerType;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Trending\TrendingStickerSets;

/**
 * The list of trending sticker sets was updated or some of them were viewed
 */
class UpdateTrendingStickerSets extends Update
{
    public const TYPE_NAME = 'updateTrendingStickerSets';

    /**
     * The prefix of the list of trending sticker sets with the newest trending sticker sets
     *
     * @var TrendingStickerSets
     */
    protected TrendingStickerSets $stickerSets;

    /**
     * Type of the affected stickers
     *
     * @var StickerType
     */
    protected StickerType $stickerType;

    public function __construct(StickerType $stickerType, TrendingStickerSets $stickerSets)
    {
        parent::__construct();

        $this->stickerType = $stickerType;
        $this->stickerSets = $stickerSets;
    }

    public static function fromArray(array $array): UpdateTrendingStickerSets
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sticker_type']),
            TdSchemaRegistry::fromArray($array['sticker_sets']),
        );
    }

    public function getStickerSets(): TrendingStickerSets
    {
        return $this->stickerSets;
    }

    public function getStickerType(): StickerType
    {
        return $this->stickerType;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'sticker_type' => $this->stickerType->typeSerialize(),
            'sticker_sets' => $this->stickerSets->typeSerialize(),
        ];
    }
}

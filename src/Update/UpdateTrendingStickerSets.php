<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Update;

/**
 * The list of trending sticker sets was updated or some of them were viewed
 */
class UpdateTrendingStickerSets extends Update
{
    public const TYPE_NAME = 'updateTrendingStickerSets';

    /**
     * Type of the affected stickers
     *
     * @var StickerType
     */
    protected StickerType $stickerType;

    /**
     * The prefix of the list of trending sticker sets with the newest trending sticker sets
     *
     * @var TrendingStickerSets
     */
    protected TrendingStickerSets $stickerSets;

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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'sticker_type' => $this->stickerType->typeSerialize(),
            'sticker_sets' => $this->stickerSets->typeSerialize(),
        ];
    }

    public function getStickerType(): StickerType
    {
        return $this->stickerType;
    }

    public function getStickerSets(): TrendingStickerSets
    {
        return $this->stickerSets;
    }
}

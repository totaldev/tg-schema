<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Sticker\StickerType;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Trending\TrendingStickerSets;

/**
 * The list of trending sticker sets was updated or some of them were viewed.
 */
class UpdateTrendingStickerSets extends Update
{
    public const string TYPE_NAME = 'updateTrendingStickerSets';

    public function __construct(
        /**
         * The prefix of the list of trending sticker sets with the newest trending sticker sets.
         */
        protected TrendingStickerSets $stickerSets,
        /**
         * Type of the affected stickers.
         */
        protected StickerType         $stickerType,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateTrendingStickerSets
    {
        return new static(
            stickerSets: TdSchemaRegistry::fromArray($array['sticker_sets']),
            stickerType: TdSchemaRegistry::fromArray($array['sticker_type']),
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

    public function setStickerSets(TrendingStickerSets $value): static
    {
        $this->stickerSets = $value;

        return $this;
    }

    public function setStickerType(StickerType $value): static
    {
        $this->stickerType = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'sticker_sets' => $this->stickerSets->jsonSerialize(),
            'sticker_type' => $this->stickerType->jsonSerialize(),
        ];
    }
}

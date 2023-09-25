<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\Sticker\StickerType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Searches for stickers from public sticker sets that correspond to any of the given emoji
 */
class SearchStickers extends TdFunction
{
    public const TYPE_NAME = 'searchStickers';

    /**
     * Space-separated list of emoji to search for; must be non-empty
     *
     * @var string
     */
    protected string $emojis;

    /**
     * The maximum number of stickers to be returned; 0-100
     *
     * @var int
     */
    protected int $limit;

    /**
     * Type of the stickers to return
     *
     * @var StickerType
     */
    protected StickerType $stickerType;

    public function __construct(StickerType $stickerType, string $emojis, int $limit)
    {
        $this->stickerType = $stickerType;
        $this->emojis = $emojis;
        $this->limit = $limit;
    }

    public static function fromArray(array $array): SearchStickers
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sticker_type']),
            $array['emojis'],
            $array['limit'],
        );
    }

    public function getEmojis(): string
    {
        return $this->emojis;
    }

    public function getLimit(): int
    {
        return $this->limit;
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
            'emojis' => $this->emojis,
            'limit' => $this->limit,
        ];
    }
}

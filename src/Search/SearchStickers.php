<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\TdFunction;

/**
 * Searches for stickers from public sticker sets that correspond to any of the given emoji
 */
class SearchStickers extends TdFunction
{
    public const TYPE_NAME = 'searchStickers';

    /**
     * Type of the stickers to return
     *
     * @var StickerType
     */
    protected StickerType $stickerType;

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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'sticker_type' => $this->stickerType->typeSerialize(),
            'emojis' => $this->emojis,
            'limit' => $this->limit,
        ];
    }

    public function getStickerType(): StickerType
    {
        return $this->stickerType;
    }

    public function getEmojis(): string
    {
        return $this->emojis;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }
}

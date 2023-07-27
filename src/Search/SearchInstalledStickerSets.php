<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\Sticker\StickerType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Searches for installed sticker sets by looking for specified query in their title and name
 */
class SearchInstalledStickerSets extends TdFunction
{
    public const TYPE_NAME = 'searchInstalledStickerSets';

    /**
     * Type of the sticker sets to search for
     *
     * @var StickerType
     */
    protected StickerType $stickerType;

    /**
     * Query to search for
     *
     * @var string
     */
    protected string $query;

    /**
     * The maximum number of sticker sets to return
     *
     * @var int
     */
    protected int $limit;

    public function __construct(StickerType $stickerType, string $query, int $limit)
    {
        $this->stickerType = $stickerType;
        $this->query = $query;
        $this->limit = $limit;
    }

    public static function fromArray(array $array): SearchInstalledStickerSets
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sticker_type']),
            $array['query'],
            $array['limit'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'sticker_type' => $this->stickerType->typeSerialize(),
            'query' => $this->query,
            'limit' => $this->limit,
        ];
    }

    public function getStickerType(): StickerType
    {
        return $this->stickerType;
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\Sticker\StickerType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Searches for installed sticker sets by looking for specified query in their title and name.
 */
class SearchInstalledStickerSets extends TdFunction
{
    public const TYPE_NAME = 'searchInstalledStickerSets';

    public function __construct(
        /**
         * Type of the sticker sets to search for.
         */
        protected StickerType $stickerType,
        /**
         * Query to search for.
         */
        protected string      $query,
        /**
         * The maximum number of sticker sets to return.
         */
        protected int         $limit,
    ) {}

    public static function fromArray(array $array): SearchInstalledStickerSets
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sticker_type']),
            $array['query'],
            $array['limit'],
        );
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getQuery(): string
    {
        return $this->query;
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
            'query'        => $this->query,
            'limit'        => $this->limit,
        ];
    }
}

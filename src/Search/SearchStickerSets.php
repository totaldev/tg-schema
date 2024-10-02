<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\Sticker\StickerType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Searches for sticker sets by looking for specified query in their title and name. Excludes installed sticker sets from the results.
 */
class SearchStickerSets extends TdFunction
{
    public const TYPE_NAME = 'searchStickerSets';

    public function __construct(
        /**
         * Type of the sticker sets to return.
         */
        protected StickerType $stickerType,
        /**
         * Query to search for.
         */
        protected string      $query,
    ) {}

    public static function fromArray(array $array): SearchStickerSets
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sticker_type']),
            $array['query'],
        );
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
        ];
    }
}

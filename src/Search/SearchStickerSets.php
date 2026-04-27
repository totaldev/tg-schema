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
    public const string TYPE_NAME = 'searchStickerSets';

    public function __construct(
        /**
         * Query to search for.
         */
        protected string      $query,
        /**
         * Type of the sticker sets to return.
         */
        protected StickerType $stickerType,
    ) {}

    public static function fromArray(array $array): SearchStickerSets
    {
        return new static(
            query      : $array['query'],
            stickerType: TdSchemaRegistry::fromArray($array['sticker_type']),
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

    public function setQuery(string $value): static
    {
        $this->query = $value;

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
            'query'        => $this->query,
            'sticker_type' => $this->stickerType->jsonSerialize(),
        ];
    }
}

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
    public const string TYPE_NAME = 'searchInstalledStickerSets';

    public function __construct(
        /**
         * The maximum number of sticker sets to return.
         */
        protected int         $limit,
        /**
         * Query to search for.
         */
        protected string      $query,
        /**
         * Type of the sticker sets to search for.
         */
        protected StickerType $stickerType,
    ) {}

    public static function fromArray(array $array): SearchInstalledStickerSets
    {
        return new static(
            limit      : $array['limit'],
            query      : $array['query'],
            stickerType: TdSchemaRegistry::fromArray($array['sticker_type']),
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

    public function setLimit(int $value): static
    {
        $this->limit = $value;

        return $this;
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
            'limit'        => $this->limit,
            'query'        => $this->query,
            'sticker_type' => $this->stickerType->jsonSerialize(),
        ];
    }
}

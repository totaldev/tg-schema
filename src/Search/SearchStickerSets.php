<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Searches for ordinary sticker sets by looking for specified query in their title and name. Excludes installed sticker sets from the results
 */
class SearchStickerSets extends TdFunction
{
    public const TYPE_NAME = 'searchStickerSets';

    /**
     * Query to search for
     *
     * @var string
     */
    protected string $query;

    public function __construct(string $query)
    {
        $this->query = $query;
    }

    public static function fromArray(array $array): SearchStickerSets
    {
        return new static(
            $array['query'],
        );
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'query' => $this->query,
        ];
    }
}

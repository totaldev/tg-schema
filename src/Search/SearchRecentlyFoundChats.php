<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\TdFunction;

/**
 * Searches for the specified query in the title and username of up to 50 recently found chats; this is an offline request
 */
class SearchRecentlyFoundChats extends TdFunction
{
    public const TYPE_NAME = 'searchRecentlyFoundChats';

    /**
     * Query to search for
     *
     * @var string
     */
    protected string $query;

    /**
     * The maximum number of chats to be returned
     *
     * @var int
     */
    protected int $limit;

    public function __construct(string $query, int $limit)
    {
        $this->query = $query;
        $this->limit = $limit;
    }

    public static function fromArray(array $array): SearchRecentlyFoundChats
    {
        return new static(
            $array['query'],
            $array['limit'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'query' => $this->query,
            'limit' => $this->limit,
        ];
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

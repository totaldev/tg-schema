<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Searches for files in the file download list or recently downloaded files from the list
 */
class SearchFileDownloads extends TdFunction
{
    public const TYPE_NAME = 'searchFileDownloads';

    /**
     * The maximum number of files to be returned
     *
     * @var int
     */
    protected int $limit;

    /**
     * Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results
     *
     * @var string
     */
    protected string $offset;

    /**
     * Pass true to search only for active downloads, including paused
     *
     * @var bool
     */
    protected bool $onlyActive;

    /**
     * Pass true to search only for completed downloads
     *
     * @var bool
     */
    protected bool $onlyCompleted;

    /**
     * Query to search for; may be empty to return all downloaded files
     *
     * @var string
     */
    protected string $query;

    public function __construct(string $query, bool $onlyActive, bool $onlyCompleted, string $offset, int $limit)
    {
        $this->query = $query;
        $this->onlyActive = $onlyActive;
        $this->onlyCompleted = $onlyCompleted;
        $this->offset = $offset;
        $this->limit = $limit;
    }

    public static function fromArray(array $array): SearchFileDownloads
    {
        return new static(
            $array['query'],
            $array['only_active'],
            $array['only_completed'],
            $array['offset'],
            $array['limit'],
        );
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getOffset(): string
    {
        return $this->offset;
    }

    public function getOnlyActive(): bool
    {
        return $this->onlyActive;
    }

    public function getOnlyCompleted(): bool
    {
        return $this->onlyCompleted;
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
            'only_active' => $this->onlyActive,
            'only_completed' => $this->onlyCompleted,
            'offset' => $this->offset,
            'limit' => $this->limit,
        ];
    }
}

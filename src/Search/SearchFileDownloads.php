<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\TdFunction;

/**
 * Searches for files in the file download list or recently downloaded files from the list.
 */
class SearchFileDownloads extends TdFunction
{
    public const TYPE_NAME = 'searchFileDownloads';

    public function __construct(
        /**
         * Query to search for; may be empty to return all downloaded files.
         */
        protected string $query,
        /**
         * Pass true to search only for active downloads, including paused.
         */
        protected bool   $onlyActive,
        /**
         * Pass true to search only for completed downloads.
         */
        protected bool   $onlyCompleted,
        /**
         * Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results.
         */
        protected string $offset,
        /**
         * The maximum number of files to be returned.
         */
        protected int    $limit
    ) {}

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
            '@type'          => static::TYPE_NAME,
            'query'          => $this->query,
            'only_active'    => $this->onlyActive,
            'only_completed' => $this->onlyCompleted,
            'offset'         => $this->offset,
            'limit'          => $this->limit,
        ];
    }
}

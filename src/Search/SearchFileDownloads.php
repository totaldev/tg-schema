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
    public const string TYPE_NAME = 'searchFileDownloads';

    public function __construct(
        /**
         * The maximum number of files to be returned.
         */
        protected int    $limit,
        /**
         * Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results.
         */
        protected string $offset,
        /**
         * Pass true to search only for active downloads, including paused.
         */
        protected bool   $onlyActive,
        /**
         * Pass true to search only for completed downloads.
         */
        protected bool   $onlyCompleted,
        /**
         * Query to search for; may be empty to return all downloaded files.
         */
        protected string $query,
    ) {}

    public static function fromArray(array $array): SearchFileDownloads
    {
        return new static(
            limit        : $array['limit'],
            offset       : $array['offset'],
            onlyActive   : $array['only_active'],
            onlyCompleted: $array['only_completed'],
            query        : $array['query'],
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

    public function setLimit(int $value): static
    {
        $this->limit = $value;

        return $this;
    }

    public function setOffset(string $value): static
    {
        $this->offset = $value;

        return $this;
    }

    public function setOnlyActive(bool $value): static
    {
        $this->onlyActive = $value;

        return $this;
    }

    public function setOnlyCompleted(bool $value): static
    {
        $this->onlyCompleted = $value;

        return $this;
    }

    public function setQuery(string $value): static
    {
        $this->query = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'limit'          => $this->limit,
            'offset'         => $this->offset,
            'only_active'    => $this->onlyActive,
            'only_completed' => $this->onlyCompleted,
            'query'          => $this->query,
        ];
    }
}

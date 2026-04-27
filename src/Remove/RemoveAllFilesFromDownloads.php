<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Remove;

use Totaldev\TgSchema\TdFunction;

/**
 * Removes all files from the file download list.
 */
class RemoveAllFilesFromDownloads extends TdFunction
{
    public const string TYPE_NAME = 'removeAllFilesFromDownloads';

    public function __construct(
        /**
         * Pass true to delete the file from the TDLib file cache.
         */
        protected bool $deleteFromCache,
        /**
         * Pass true to remove only active downloads, including paused.
         */
        protected bool $onlyActive,
        /**
         * Pass true to remove only completed downloads.
         */
        protected bool $onlyCompleted,
    ) {}

    public static function fromArray(array $array): RemoveAllFilesFromDownloads
    {
        return new static(
            deleteFromCache: $array['delete_from_cache'],
            onlyActive     : $array['only_active'],
            onlyCompleted  : $array['only_completed'],
        );
    }

    public function getDeleteFromCache(): bool
    {
        return $this->deleteFromCache;
    }

    public function getOnlyActive(): bool
    {
        return $this->onlyActive;
    }

    public function getOnlyCompleted(): bool
    {
        return $this->onlyCompleted;
    }

    public function setDeleteFromCache(bool $value): static
    {
        $this->deleteFromCache = $value;

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

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'delete_from_cache' => $this->deleteFromCache,
            'only_active'       => $this->onlyActive,
            'only_completed'    => $this->onlyCompleted,
        ];
    }
}

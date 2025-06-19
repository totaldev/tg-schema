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
    public const TYPE_NAME = 'removeAllFilesFromDownloads';

    public function __construct(
        /**
         * Pass true to remove only active downloads, including paused.
         */
        protected bool $onlyActive,
        /**
         * Pass true to remove only completed downloads.
         */
        protected bool $onlyCompleted,
        /**
         * Pass true to delete the file from the TDLib file cache.
         */
        protected bool $deleteFromCache
    ) {}

    public static function fromArray(array $array): RemoveAllFilesFromDownloads
    {
        return new static(
            $array['only_active'],
            $array['only_completed'],
            $array['delete_from_cache'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'only_active'       => $this->onlyActive,
            'only_completed'    => $this->onlyCompleted,
            'delete_from_cache' => $this->deleteFromCache,
        ];
    }
}

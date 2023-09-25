<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Remove;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Removes all files from the file download list
 */
class RemoveAllFilesFromDownloads extends TdFunction
{
    public const TYPE_NAME = 'removeAllFilesFromDownloads';

    /**
     * Pass true to remove only active downloads, including paused
     *
     * @var bool
     */
    protected bool $onlyActive;

    /**
     * Pass true to remove only completed downloads
     *
     * @var bool
     */
    protected bool $onlyCompleted;

    /**
     * Pass true to delete the file from the TDLib file cache
     *
     * @var bool
     */
    protected bool $deleteFromCache;

    public function __construct(bool $onlyActive, bool $onlyCompleted, bool $deleteFromCache)
    {
        $this->onlyActive = $onlyActive;
        $this->onlyCompleted = $onlyCompleted;
        $this->deleteFromCache = $deleteFromCache;
    }

    public static function fromArray(array $array): RemoveAllFilesFromDownloads
    {
        return new static(
            $array['only_active'],
            $array['only_completed'],
            $array['delete_from_cache'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'only_active' => $this->onlyActive,
            'only_completed' => $this->onlyCompleted,
            'delete_from_cache' => $this->deleteFromCache,
        ];
    }

    public function getOnlyActive(): bool
    {
        return $this->onlyActive;
    }

    public function getOnlyCompleted(): bool
    {
        return $this->onlyCompleted;
    }

    public function getDeleteFromCache(): bool
    {
        return $this->deleteFromCache;
    }
}

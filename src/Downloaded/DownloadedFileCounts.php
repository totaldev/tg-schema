<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Downloaded;

use Totaldev\TgSchema\TdObject;

/**
 * Contains number of being downloaded and recently downloaded files found.
 */
class DownloadedFileCounts extends TdObject
{
    public const string TYPE_NAME = 'downloadedFileCounts';

    public function __construct(
        /**
         * Number of active file downloads found, including paused.
         */
        protected int $activeCount,
        /**
         * Number of completed file downloads found.
         */
        protected int $completedCount,
        /**
         * Number of paused file downloads found.
         */
        protected int $pausedCount,
    ) {}

    public static function fromArray(array $array): DownloadedFileCounts
    {
        return new static(
            activeCount   : $array['active_count'],
            completedCount: $array['completed_count'],
            pausedCount   : $array['paused_count'],
        );
    }

    public function getActiveCount(): int
    {
        return $this->activeCount;
    }

    public function getCompletedCount(): int
    {
        return $this->completedCount;
    }

    public function getPausedCount(): int
    {
        return $this->pausedCount;
    }

    public function setActiveCount(int $value): static
    {
        $this->activeCount = $value;

        return $this;
    }

    public function setCompletedCount(int $value): static
    {
        $this->completedCount = $value;

        return $this;
    }

    public function setPausedCount(int $value): static
    {
        $this->pausedCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'active_count'    => $this->activeCount,
            'completed_count' => $this->completedCount,
            'paused_count'    => $this->pausedCount,
        ];
    }
}

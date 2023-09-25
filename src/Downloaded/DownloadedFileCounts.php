<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Downloaded;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains number of being downloaded and recently downloaded files found
 */
class DownloadedFileCounts extends TdObject
{
    public const TYPE_NAME = 'downloadedFileCounts';

    /**
     * Number of active file downloads found, including paused
     *
     * @var int
     */
    protected int $activeCount;

    /**
     * Number of completed file downloads found
     *
     * @var int
     */
    protected int $completedCount;

    /**
     * Number of paused file downloads found
     *
     * @var int
     */
    protected int $pausedCount;

    public function __construct(int $activeCount, int $pausedCount, int $completedCount)
    {
        $this->activeCount = $activeCount;
        $this->pausedCount = $pausedCount;
        $this->completedCount = $completedCount;
    }

    public static function fromArray(array $array): DownloadedFileCounts
    {
        return new static(
            $array['active_count'],
            $array['paused_count'],
            $array['completed_count'],
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'active_count' => $this->activeCount,
            'paused_count' => $this->pausedCount,
            'completed_count' => $this->completedCount,
        ];
    }
}

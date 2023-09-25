<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Downloaded\DownloadedFileCounts;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A file download was changed. This update is sent only after file download list is loaded for the first time
 */
class UpdateFileDownload extends Update
{
    public const TYPE_NAME = 'updateFileDownload';

    /**
     * Point in time (Unix timestamp) when the file downloading was completed; 0 if the file downloading isn't completed
     *
     * @var int
     */
    protected int $completeDate;

    /**
     * New number of being downloaded and recently downloaded files found
     *
     * @var DownloadedFileCounts
     */
    protected DownloadedFileCounts $counts;

    /**
     * File identifier
     *
     * @var int
     */
    protected int $fileId;

    /**
     * True, if downloading of the file is paused
     *
     * @var bool
     */
    protected bool $isPaused;

    public function __construct(int $fileId, int $completeDate, bool $isPaused, DownloadedFileCounts $counts)
    {
        parent::__construct();

        $this->fileId = $fileId;
        $this->completeDate = $completeDate;
        $this->isPaused = $isPaused;
        $this->counts = $counts;
    }

    public static function fromArray(array $array): UpdateFileDownload
    {
        return new static(
            $array['file_id'],
            $array['complete_date'],
            $array['is_paused'],
            TdSchemaRegistry::fromArray($array['counts']),
        );
    }

    public function getCompleteDate(): int
    {
        return $this->completeDate;
    }

    public function getCounts(): DownloadedFileCounts
    {
        return $this->counts;
    }

    public function getFileId(): int
    {
        return $this->fileId;
    }

    public function getIsPaused(): bool
    {
        return $this->isPaused;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'file_id' => $this->fileId,
            'complete_date' => $this->completeDate,
            'is_paused' => $this->isPaused,
            'counts' => $this->counts->typeSerialize(),
        ];
    }
}

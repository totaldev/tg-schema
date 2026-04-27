<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Downloaded\DownloadedFileCounts;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A file download was changed. This update is sent only after file download list is loaded for the first time.
 */
class UpdateFileDownload extends Update
{
    public const string TYPE_NAME = 'updateFileDownload';

    public function __construct(
        /**
         * Point in time (Unix timestamp) when the file downloading was completed; 0 if the file downloading isn't completed.
         */
        protected int                  $completeDate,
        /**
         * New number of being downloaded and recently downloaded files found.
         */
        protected DownloadedFileCounts $counts,
        /**
         * File identifier.
         */
        protected int                  $fileId,
        /**
         * True, if downloading of the file is paused.
         */
        protected bool                 $isPaused,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateFileDownload
    {
        return new static(
            completeDate: $array['complete_date'],
            counts      : TdSchemaRegistry::fromArray($array['counts']),
            fileId      : $array['file_id'],
            isPaused    : $array['is_paused'],
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

    public function setCompleteDate(int $value): static
    {
        $this->completeDate = $value;

        return $this;
    }

    public function setCounts(DownloadedFileCounts $value): static
    {
        $this->counts = $value;

        return $this;
    }

    public function setFileId(int $value): static
    {
        $this->fileId = $value;

        return $this;
    }

    public function setIsPaused(bool $value): static
    {
        $this->isPaused = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'complete_date' => $this->completeDate,
            'counts'        => $this->counts->jsonSerialize(),
            'file_id'       => $this->fileId,
            'is_paused'     => $this->isPaused,
        ];
    }
}

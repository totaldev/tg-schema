<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Download;

use Totaldev\TgSchema\TdFunction;

/**
 * Downloads a file from the cloud. Download progress and completion of the download will be notified through updateFile updates.
 */
class DownloadFile extends TdFunction
{
    public const TYPE_NAME = 'downloadFile';

    public function __construct(
        /**
         * Identifier of the file to download.
         */
        protected int  $fileId,
        /**
         * Priority of the download (1-32). The higher the priority, the earlier the file will be downloaded. If the priorities of two files are equal, then the last one for which downloadFile/addFileToDownloads was called will be downloaded first.
         */
        protected int  $priority,
        /**
         * The starting position from which the file needs to be downloaded.
         */
        protected int  $offset,
        /**
         * Number of bytes which need to be downloaded starting from the "offset" position before the download will automatically be canceled; use 0 to download without a limit.
         */
        protected int  $limit,
        /**
         * Pass true to return response only after the file download has succeeded, has failed, has been canceled, or a new downloadFile request with different offset/limit parameters was sent; pass false to return file state immediately, just after the download has been started.
         */
        protected bool $synchronous,
    ) {}

    public static function fromArray(array $array): DownloadFile
    {
        return new static(
            $array['file_id'],
            $array['priority'],
            $array['offset'],
            $array['limit'],
            $array['synchronous'],
        );
    }

    public function getFileId(): int
    {
        return $this->fileId;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }

    public function getPriority(): int
    {
        return $this->priority;
    }

    public function getSynchronous(): bool
    {
        return $this->synchronous;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'file_id'     => $this->fileId,
            'priority'    => $this->priority,
            'offset'      => $this->offset,
            'limit'       => $this->limit,
            'synchronous' => $this->synchronous,
        ];
    }
}

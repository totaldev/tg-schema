<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * The state of the file download list has changed.
 */
class UpdateFileDownloads extends Update
{
    public const TYPE_NAME = 'updateFileDownloads';

    public function __construct(
        /**
         * Total size of files in the file download list, in bytes.
         */
        protected int $totalSize,
        /**
         * Total number of files in the file download list.
         */
        protected int $totalCount,
        /**
         * Total downloaded size of files in the file download list, in bytes.
         */
        protected int $downloadedSize
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateFileDownloads
    {
        return new static(
            $array['total_size'],
            $array['total_count'],
            $array['downloaded_size'],
        );
    }

    public function getDownloadedSize(): int
    {
        return $this->downloadedSize;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function getTotalSize(): int
    {
        return $this->totalSize;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'total_size'      => $this->totalSize,
            'total_count'     => $this->totalCount,
            'downloaded_size' => $this->downloadedSize,
        ];
    }
}

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
    public const string TYPE_NAME = 'updateFileDownloads';

    public function __construct(
        /**
         * Total downloaded size of files in the file download list, in bytes.
         */
        protected int $downloadedSize,
        /**
         * Total number of files in the file download list.
         */
        protected int $totalCount,
        /**
         * Total size of files in the file download list, in bytes.
         */
        protected int $totalSize,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateFileDownloads
    {
        return new static(
            downloadedSize: $array['downloaded_size'],
            totalCount    : $array['total_count'],
            totalSize     : $array['total_size'],
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

    public function setDownloadedSize(int $value): static
    {
        $this->downloadedSize = $value;

        return $this;
    }

    public function setTotalCount(int $value): static
    {
        $this->totalCount = $value;

        return $this;
    }

    public function setTotalSize(int $value): static
    {
        $this->totalSize = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'downloaded_size' => $this->downloadedSize,
            'total_count'     => $this->totalCount,
            'total_size'      => $this->totalSize,
        ];
    }
}

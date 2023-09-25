<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The state of the file download list has changed
 */
class UpdateFileDownloads extends Update
{
    public const TYPE_NAME = 'updateFileDownloads';

    /**
     * Total downloaded size of files in the file download list, in bytes
     *
     * @var int
     */
    protected int $downloadedSize;

    /**
     * Total number of files in the file download list
     *
     * @var int
     */
    protected int $totalCount;

    /**
     * Total size of files in the file download list, in bytes
     *
     * @var int
     */
    protected int $totalSize;

    public function __construct(int $totalSize, int $totalCount, int $downloadedSize)
    {
        parent::__construct();

        $this->totalSize = $totalSize;
        $this->totalCount = $totalCount;
        $this->downloadedSize = $downloadedSize;
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
            '@type' => static::TYPE_NAME,
            'total_size' => $this->totalSize,
            'total_count' => $this->totalCount,
            'downloaded_size' => $this->downloadedSize,
        ];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Found;

use Totaldev\TgSchema\Downloaded\DownloadedFileCounts;
use Totaldev\TgSchema\File\FileDownload;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of downloaded files, found by a search
 */
class FoundFileDownloads extends TdObject
{
    public const TYPE_NAME = 'foundFileDownloads';

    /**
     * Total number of suitable files, ignoring offset
     *
     * @var DownloadedFileCounts
     */
    protected DownloadedFileCounts $totalCounts;

    /**
     * The list of files
     *
     * @var FileDownload[]
     */
    protected array $files;

    /**
     * The offset for the next request. If empty, there are no more results
     *
     * @var string
     */
    protected string $nextOffset;

    public function __construct(DownloadedFileCounts $totalCounts, array $files, string $nextOffset)
    {
        $this->totalCounts = $totalCounts;
        $this->files = $files;
        $this->nextOffset = $nextOffset;
    }

    public static function fromArray(array $array): FoundFileDownloads
    {
        return new static(
            TdSchemaRegistry::fromArray($array['total_counts']),
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['files']),
            $array['next_offset'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'total_counts' => $this->totalCounts->typeSerialize(),
            array_map(fn($x) => $x->typeSerialize(), $this->files),
            'next_offset' => $this->nextOffset,
        ];
    }

    public function getTotalCounts(): DownloadedFileCounts
    {
        return $this->totalCounts;
    }

    public function getFiles(): array
    {
        return $this->files;
    }

    public function getNextOffset(): string
    {
        return $this->nextOffset;
    }
}

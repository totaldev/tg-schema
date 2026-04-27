<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Found;

use Totaldev\TgSchema\Downloaded\DownloadedFileCounts;
use Totaldev\TgSchema\File\FileDownload;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of downloaded files, found by a search.
 */
class FoundFileDownloads extends TdObject
{
    public const string TYPE_NAME = 'foundFileDownloads';

    public function __construct(
        /**
         * The list of files.
         *
         * @var FileDownload[]
         */
        protected array                $files,
        /**
         * The offset for the next request. If empty, then there are no more results.
         */
        protected string               $nextOffset,
        /**
         * Total number of suitable files, ignoring offset.
         */
        protected DownloadedFileCounts $totalCounts,
    ) {}

    public static function fromArray(array $array): FoundFileDownloads
    {
        return new static(
            files      : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['files']),
            nextOffset : $array['next_offset'],
            totalCounts: TdSchemaRegistry::fromArray($array['total_counts']),
        );
    }

    public function getFiles(): array
    {
        return $this->files;
    }

    public function getNextOffset(): string
    {
        return $this->nextOffset;
    }

    public function getTotalCounts(): DownloadedFileCounts
    {
        return $this->totalCounts;
    }

    public function setFiles(array $value): static
    {
        $this->files = $value;

        return $this;
    }

    public function setNextOffset(string $value): static
    {
        $this->nextOffset = $value;

        return $this;
    }

    public function setTotalCounts(DownloadedFileCounts $value): static
    {
        $this->totalCounts = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'files'        => array_map(static fn($x) => $x->jsonSerialize(), $this->files),
            'next_offset'  => $this->nextOffset,
            'total_counts' => $this->totalCounts->jsonSerialize(),
        ];
    }
}

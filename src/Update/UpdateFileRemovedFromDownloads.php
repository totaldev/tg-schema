<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Downloaded\DownloadedFileCounts;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A file was removed from the file download list. This update is sent only after file download list is loaded for the first time
 */
class UpdateFileRemovedFromDownloads extends Update
{
    public const TYPE_NAME = 'updateFileRemovedFromDownloads';

    /**
     * File identifier
     *
     * @var int
     */
    protected int $fileId;

    /**
     * New number of being downloaded and recently downloaded files found
     *
     * @var DownloadedFileCounts
     */
    protected DownloadedFileCounts $counts;

    public function __construct(int $fileId, DownloadedFileCounts $counts)
    {
        parent::__construct();

        $this->fileId = $fileId;
        $this->counts = $counts;
    }

    public static function fromArray(array $array): UpdateFileRemovedFromDownloads
    {
        return new static(
            $array['file_id'],
            TdSchemaRegistry::fromArray($array['counts']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'file_id' => $this->fileId,
            'counts' => $this->counts->typeSerialize(),
        ];
    }

    public function getFileId(): int
    {
        return $this->fileId;
    }

    public function getCounts(): DownloadedFileCounts
    {
        return $this->counts;
    }
}

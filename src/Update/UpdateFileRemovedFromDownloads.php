<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Downloaded\DownloadedFileCounts;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A file was removed from the file download list. This update is sent only after file download list is loaded for the first time.
 */
class UpdateFileRemovedFromDownloads extends Update
{
    public const TYPE_NAME = 'updateFileRemovedFromDownloads';

    public function __construct(
        /**
         * File identifier.
         */
        protected int                  $fileId,
        /**
         * New number of being downloaded and recently downloaded files found.
         */
        protected DownloadedFileCounts $counts,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateFileRemovedFromDownloads
    {
        return new static(
            $array['file_id'],
            TdSchemaRegistry::fromArray($array['counts']),
        );
    }

    public function getCounts(): DownloadedFileCounts
    {
        return $this->counts;
    }

    public function getFileId(): int
    {
        return $this->fileId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'file_id' => $this->fileId,
            'counts'  => $this->counts->typeSerialize(),
        ];
    }
}

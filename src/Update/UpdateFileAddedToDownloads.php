<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Downloaded\DownloadedFileCounts;
use Totaldev\TgSchema\File\FileDownload;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A file was added to the file download list. This update is sent only after file download list is loaded for the first time.
 */
class UpdateFileAddedToDownloads extends Update
{
    public const TYPE_NAME = 'updateFileAddedToDownloads';

    public function __construct(
        /**
         * The added file download.
         */
        protected FileDownload         $fileDownload,
        /**
         * New number of being downloaded and recently downloaded files found.
         */
        protected DownloadedFileCounts $counts
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateFileAddedToDownloads
    {
        return new static(
            TdSchemaRegistry::fromArray($array['file_download']),
            TdSchemaRegistry::fromArray($array['counts']),
        );
    }

    public function getCounts(): DownloadedFileCounts
    {
        return $this->counts;
    }

    public function getFileDownload(): FileDownload
    {
        return $this->fileDownload;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'file_download' => $this->fileDownload->typeSerialize(),
            'counts'        => $this->counts->typeSerialize(),
        ];
    }
}

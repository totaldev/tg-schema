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
    public const string TYPE_NAME = 'updateFileAddedToDownloads';

    public function __construct(
        /**
         * New number of being downloaded and recently downloaded files found.
         */
        protected DownloadedFileCounts $counts,
        /**
         * The added file download.
         */
        protected FileDownload         $fileDownload,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateFileAddedToDownloads
    {
        return new static(
            counts      : TdSchemaRegistry::fromArray($array['counts']),
            fileDownload: TdSchemaRegistry::fromArray($array['file_download']),
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

    public function setCounts(DownloadedFileCounts $value): static
    {
        $this->counts = $value;

        return $this;
    }

    public function setFileDownload(FileDownload $value): static
    {
        $this->fileDownload = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'counts'        => $this->counts->jsonSerialize(),
            'file_download' => $this->fileDownload->jsonSerialize(),
        ];
    }
}

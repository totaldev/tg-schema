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
    public const string TYPE_NAME = 'updateFileRemovedFromDownloads';

    public function __construct(
        /**
         * New number of being downloaded and recently downloaded files found.
         */
        protected DownloadedFileCounts $counts,
        /**
         * File identifier.
         */
        protected int                  $fileId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateFileRemovedFromDownloads
    {
        return new static(
            counts: TdSchemaRegistry::fromArray($array['counts']),
            fileId: $array['file_id'],
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

    public function setCounts(DownloadedFileCounts $value): static
    {
        $this->counts = $value;

        return $this;
    }

    public function setFileId(int $value): static
    {
        $this->fileId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'counts'  => $this->counts->jsonSerialize(),
            'file_id' => $this->fileId,
        ];
    }
}

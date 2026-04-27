<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Remove;

use Totaldev\TgSchema\TdFunction;

/**
 * Removes a file from the file download list.
 */
class RemoveFileFromDownloads extends TdFunction
{
    public const string TYPE_NAME = 'removeFileFromDownloads';

    public function __construct(
        /**
         * Pass true to delete the file from the TDLib file cache.
         */
        protected bool $deleteFromCache,
        /**
         * Identifier of the downloaded file.
         */
        protected int  $fileId,
    ) {}

    public static function fromArray(array $array): RemoveFileFromDownloads
    {
        return new static(
            deleteFromCache: $array['delete_from_cache'],
            fileId         : $array['file_id'],
        );
    }

    public function getDeleteFromCache(): bool
    {
        return $this->deleteFromCache;
    }

    public function getFileId(): int
    {
        return $this->fileId;
    }

    public function setDeleteFromCache(bool $value): static
    {
        $this->deleteFromCache = $value;

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
            '@type'             => static::TYPE_NAME,
            'delete_from_cache' => $this->deleteFromCache,
            'file_id'           => $this->fileId,
        ];
    }
}

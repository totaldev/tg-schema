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
    public const TYPE_NAME = 'removeFileFromDownloads';

    public function __construct(
        /**
         * Identifier of the downloaded file.
         */
        protected int  $fileId,
        /**
         * Pass true to delete the file from the TDLib file cache.
         */
        protected bool $deleteFromCache
    ) {}

    public static function fromArray(array $array): RemoveFileFromDownloads
    {
        return new static(
            $array['file_id'],
            $array['delete_from_cache'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'file_id'           => $this->fileId,
            'delete_from_cache' => $this->deleteFromCache,
        ];
    }
}

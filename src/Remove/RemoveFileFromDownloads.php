<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Remove;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Removes a file from the file download list
 */
class RemoveFileFromDownloads extends TdFunction
{
    public const TYPE_NAME = 'removeFileFromDownloads';

    /**
     * Pass true to delete the file from the TDLib file cache
     *
     * @var bool
     */
    protected bool $deleteFromCache;

    /**
     * Identifier of the downloaded file
     *
     * @var int
     */
    protected int $fileId;

    public function __construct(int $fileId, bool $deleteFromCache)
    {
        $this->fileId = $fileId;
        $this->deleteFromCache = $deleteFromCache;
    }

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
            '@type' => static::TYPE_NAME,
            'file_id' => $this->fileId,
            'delete_from_cache' => $this->deleteFromCache,
        ];
    }
}

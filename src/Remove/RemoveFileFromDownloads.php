<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

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
     * Identifier of the downloaded file
     *
     * @var int
     */
    protected int $fileId;

    /**
     * Pass true to delete the file from the TDLib file cache
     *
     * @var bool
     */
    protected bool $deleteFromCache;

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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'file_id' => $this->fileId,
            'delete_from_cache' => $this->deleteFromCache,
        ];
    }

    public function getFileId(): int
    {
        return $this->fileId;
    }

    public function getDeleteFromCache(): bool
    {
        return $this->deleteFromCache;
    }
}

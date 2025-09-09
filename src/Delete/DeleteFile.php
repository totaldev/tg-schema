<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Delete;

use Totaldev\TgSchema\TdFunction;

/**
 * Deletes a file from the TDLib file cache.
 */
class DeleteFile extends TdFunction
{
    public const TYPE_NAME = 'deleteFile';

    public function __construct(
        /**
         * Identifier of the file to delete.
         */
        protected int $fileId
    ) {}

    public static function fromArray(array $array): DeleteFile
    {
        return new static(
            $array['file_id'],
        );
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
        ];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns file downloaded prefix size from a given offset, in bytes.
 */
class GetFileDownloadedPrefixSize extends TdFunction
{
    public const TYPE_NAME = 'getFileDownloadedPrefixSize';

    public function __construct(
        /**
         * Identifier of the file.
         */
        protected int $fileId,
        /**
         * Offset from which downloaded prefix size needs to be calculated.
         */
        protected int $offset,
    ) {}

    public static function fromArray(array $array): GetFileDownloadedPrefixSize
    {
        return new static(
            $array['file_id'],
            $array['offset'],
        );
    }

    public function getFileId(): int
    {
        return $this->fileId;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'file_id' => $this->fileId,
            'offset'  => $this->offset,
        ];
    }
}

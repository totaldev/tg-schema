<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns information about a file. This is an offline method.
 */
class GetFile extends TdFunction
{
    public const TYPE_NAME = 'getFile';

    public function __construct(
        /**
         * Identifier of the file to get.
         */
        protected int $fileId
    ) {}

    public static function fromArray(array $array): GetFile
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

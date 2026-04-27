<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Read;

use Totaldev\TgSchema\TdFunction;

/**
 * Reads a part of a file from the TDLib file cache and returns read bytes. This method is intended to be used only if the application has no direct access to
 * TDLib's file system, because it is usually slower than a direct read from the file.
 */
class ReadFilePart extends TdFunction
{
    public const string TYPE_NAME = 'readFilePart';

    public function __construct(
        /**
         * Number of bytes to read. An error will be returned if there are not enough bytes available in the file from the specified position. Pass 0 to read all available data from the specified position.
         */
        protected int $count,
        /**
         * Identifier of the file. The file must be located in the TDLib file cache.
         */
        protected int $fileId,
        /**
         * The offset from which to read the file.
         */
        protected int $offset,
    ) {}

    public static function fromArray(array $array): ReadFilePart
    {
        return new static(
            count : $array['count'],
            fileId: $array['file_id'],
            offset: $array['offset'],
        );
    }

    public function getCount(): int
    {
        return $this->count;
    }

    public function getFileId(): int
    {
        return $this->fileId;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }

    public function setCount(int $value): static
    {
        $this->count = $value;

        return $this;
    }

    public function setFileId(int $value): static
    {
        $this->fileId = $value;

        return $this;
    }

    public function setOffset(int $value): static
    {
        $this->offset = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'count'   => $this->count,
            'file_id' => $this->fileId,
            'offset'  => $this->offset,
        ];
    }
}

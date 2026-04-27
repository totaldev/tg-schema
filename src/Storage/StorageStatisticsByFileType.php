<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Storage;

use Totaldev\TgSchema\File\FileType;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains the storage usage statistics for a specific file type.
 */
class StorageStatisticsByFileType extends TdObject
{
    public const string TYPE_NAME = 'storageStatisticsByFileType';

    public function __construct(
        /**
         * Total number of files.
         */
        protected int      $count,
        /**
         * File type.
         */
        protected FileType $fileType,
        /**
         * Total size of the files, in bytes.
         */
        protected int      $size,
    ) {}

    public static function fromArray(array $array): StorageStatisticsByFileType
    {
        return new static(
            count   : $array['count'],
            fileType: TdSchemaRegistry::fromArray($array['file_type']),
            size    : $array['size'],
        );
    }

    public function getCount(): int
    {
        return $this->count;
    }

    public function getFileType(): FileType
    {
        return $this->fileType;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function setCount(int $value): static
    {
        $this->count = $value;

        return $this;
    }

    public function setFileType(FileType $value): static
    {
        $this->fileType = $value;

        return $this;
    }

    public function setSize(int $value): static
    {
        $this->size = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'count'     => $this->count,
            'file_type' => $this->fileType->jsonSerialize(),
            'size'      => $this->size,
        ];
    }
}

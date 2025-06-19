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
    public const TYPE_NAME = 'storageStatisticsByFileType';

    public function __construct(
        /**
         * File type.
         */
        protected FileType $fileType,
        /**
         * Total size of the files, in bytes.
         */
        protected int      $size,
        /**
         * Total number of files.
         */
        protected int      $count
    ) {}

    public static function fromArray(array $array): StorageStatisticsByFileType
    {
        return new static(
            TdSchemaRegistry::fromArray($array['file_type']),
            $array['size'],
            $array['count'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'file_type' => $this->fileType->typeSerialize(),
            'size'      => $this->size,
            'count'     => $this->count,
        ];
    }
}

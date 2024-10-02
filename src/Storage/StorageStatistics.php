<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Storage;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains the exact storage usage statistics split by chats and file type.
 */
class StorageStatistics extends TdObject
{
    public const TYPE_NAME = 'storageStatistics';

    public function __construct(
        /**
         * Total size of files, in bytes.
         */
        protected int   $size,
        /**
         * Total number of files.
         */
        protected int   $count,
        /**
         * Statistics split by chats.
         *
         * @var StorageStatisticsByChat[]
         */
        protected array $byChat,
    ) {}

    public static function fromArray(array $array): StorageStatistics
    {
        return new static(
            $array['size'],
            $array['count'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['by_chat']),
        );
    }

    public function getByChat(): array
    {
        return $this->byChat;
    }

    public function getCount(): int
    {
        return $this->count;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'size'  => $this->size,
            'count' => $this->count,
            array_map(fn($x) => $x->typeSerialize(), $this->byChat),
        ];
    }
}

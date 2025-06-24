<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Storage;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains the storage usage statistics for a specific chat.
 */
class StorageStatisticsByChat extends TdObject
{
    public const TYPE_NAME = 'storageStatisticsByChat';

    public function __construct(
        /**
         * Chat identifier; 0 if none.
         */
        protected int   $chatId,
        /**
         * Total size of the files in the chat, in bytes.
         */
        protected int   $size,
        /**
         * Total number of files in the chat.
         */
        protected int   $count,
        /**
         * Statistics split by file types.
         *
         * @var StorageStatisticsByFileType[]
         */
        protected array $byFileType
    ) {}

    public static function fromArray(array $array): StorageStatisticsByChat
    {
        return new static(
            $array['chat_id'],
            $array['size'],
            $array['count'],
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['by_file_type']),
        );
    }

    public function getByFileType(): array
    {
        return $this->byFileType;
    }

    public function getChatId(): int
    {
        return $this->chatId;
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
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'size'    => $this->size,
            'count'   => $this->count,
            array_map(static fn($x) => $x->typeSerialize(), $this->byFileType),
        ];
    }
}

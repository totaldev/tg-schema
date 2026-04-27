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
    public const string TYPE_NAME = 'storageStatisticsByChat';

    public function __construct(
        /**
         * Statistics split by file types.
         *
         * @var StorageStatisticsByFileType[]
         */
        protected array $byFileType,
        /**
         * Chat identifier; 0 if none.
         */
        protected int   $chatId,
        /**
         * Total number of files in the chat.
         */
        protected int   $count,
        /**
         * Total size of the files in the chat, in bytes.
         */
        protected int   $size,
    ) {}

    public static function fromArray(array $array): StorageStatisticsByChat
    {
        return new static(
            byFileType: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['by_file_type']),
            chatId    : $array['chat_id'],
            count     : $array['count'],
            size      : $array['size'],
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

    public function setByFileType(array $value): static
    {
        $this->byFileType = $value;

        return $this;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setCount(int $value): static
    {
        $this->count = $value;

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
            '@type'        => static::TYPE_NAME,
            'by_file_type' => array_map(static fn($x) => $x->jsonSerialize(), $this->byFileType),
            'chat_id'      => $this->chatId,
            'count'        => $this->count,
            'size'         => $this->size,
        ];
    }
}

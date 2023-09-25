<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Storage;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains the storage usage statistics for a specific chat
 */
class StorageStatisticsByChat extends TdObject
{
    public const TYPE_NAME = 'storageStatisticsByChat';

    /**
     * Statistics split by file types
     *
     * @var StorageStatisticsByFileType[]
     */
    protected array $byFileType;

    /**
     * Chat identifier; 0 if none
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Total number of files in the chat
     *
     * @var int
     */
    protected int $count;

    /**
     * Total size of the files in the chat, in bytes
     *
     * @var int
     */
    protected int $size;

    public function __construct(int $chatId, int $size, int $count, array $byFileType)
    {
        $this->chatId = $chatId;
        $this->size = $size;
        $this->count = $count;
        $this->byFileType = $byFileType;
    }

    public static function fromArray(array $array): StorageStatisticsByChat
    {
        return new static(
            $array['chat_id'],
            $array['size'],
            $array['count'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['by_file_type']),
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
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'size' => $this->size,
            'count' => $this->count,
            array_map(fn($x) => $x->typeSerialize(), $this->byFileType),
        ];
    }
}

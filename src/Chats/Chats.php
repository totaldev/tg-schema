<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chats;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a list of chats
 */
class Chats extends TdObject
{
    public const TYPE_NAME = 'chats';

    /**
     * List of chat identifiers
     *
     * @var int[]
     */
    protected array $chatIds;

    /**
     * Approximate total number of chats found
     *
     * @var int
     */
    protected int $totalCount;

    public function __construct(int $totalCount, array $chatIds)
    {
        $this->totalCount = $totalCount;
        $this->chatIds = $chatIds;
    }

    public static function fromArray(array $array): Chats
    {
        return new static(
            $array['total_count'],
            $array['chat_ids'],
        );
    }

    public function getChatIds(): array
    {
        return $this->chatIds;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'total_count' => $this->totalCount,
            'chat_ids' => $this->chatIds,
        ];
    }
}

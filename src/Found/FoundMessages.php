<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Found;

use Totaldev\TgSchema\Message\Message;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of messages found by a search
 */
class FoundMessages extends TdObject
{
    public const TYPE_NAME = 'foundMessages';

    /**
     * List of messages
     *
     * @var Message[]
     */
    protected array $messages;

    /**
     * The offset for the next request. If empty, there are no more results
     *
     * @var string
     */
    protected string $nextOffset;

    /**
     * Approximate total number of messages found; -1 if unknown
     *
     * @var int
     */
    protected int $totalCount;

    public function __construct(int $totalCount, array $messages, string $nextOffset)
    {
        $this->totalCount = $totalCount;
        $this->messages = $messages;
        $this->nextOffset = $nextOffset;
    }

    public static function fromArray(array $array): FoundMessages
    {
        return new static(
            $array['total_count'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['messages']),
            $array['next_offset'],
        );
    }

    public function getMessages(): array
    {
        return $this->messages;
    }

    public function getNextOffset(): string
    {
        return $this->nextOffset;
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
            array_map(fn($x) => $x->typeSerialize(), $this->messages),
            'next_offset' => $this->nextOffset,
        ];
    }
}

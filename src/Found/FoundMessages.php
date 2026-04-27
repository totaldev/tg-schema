<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Found;

use Totaldev\TgSchema\Message\Message;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of messages found by a search.
 */
class FoundMessages extends TdObject
{
    public const string TYPE_NAME = 'foundMessages';

    public function __construct(
        /**
         * List of messages.
         *
         * @var Message[]
         */
        protected array  $messages,
        /**
         * The offset for the next request. If empty, then there are no more results.
         */
        protected string $nextOffset,
        /**
         * Approximate total number of messages found; -1 if unknown.
         */
        protected int    $totalCount,
    ) {}

    public static function fromArray(array $array): FoundMessages
    {
        return new static(
            messages  : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['messages']),
            nextOffset: $array['next_offset'],
            totalCount: $array['total_count'],
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

    public function setMessages(array $value): static
    {
        $this->messages = $value;

        return $this;
    }

    public function setNextOffset(string $value): static
    {
        $this->nextOffset = $value;

        return $this;
    }

    public function setTotalCount(int $value): static
    {
        $this->totalCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'messages'    => array_map(static fn($x) => $x->jsonSerialize(), $this->messages),
            'next_offset' => $this->nextOffset,
            'total_count' => $this->totalCount,
        ];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Found;

use Totaldev\TgSchema\Message\Message;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of messages found by a search in a given chat.
 */
class FoundChatMessages extends TdObject
{
    public const string TYPE_NAME = 'foundChatMessages';

    public function __construct(
        /**
         * List of messages.
         *
         * @var Message[]
         */
        protected array $messages,
        /**
         * The offset for the next request. If 0, there are no more results.
         */
        protected int   $nextFromMessageId,
        /**
         * Approximate total number of messages found; -1 if unknown.
         */
        protected int   $totalCount,
    ) {}

    public static function fromArray(array $array): FoundChatMessages
    {
        return new static(
            messages         : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['messages']),
            nextFromMessageId: $array['next_from_message_id'],
            totalCount       : $array['total_count'],
        );
    }

    public function getMessages(): array
    {
        return $this->messages;
    }

    public function getNextFromMessageId(): int
    {
        return $this->nextFromMessageId;
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

    public function setNextFromMessageId(int $value): static
    {
        $this->nextFromMessageId = $value;

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
            '@type'                => static::TYPE_NAME,
            'messages'             => array_map(static fn($x) => $x->jsonSerialize(), $this->messages),
            'next_from_message_id' => $this->nextFromMessageId,
            'total_count'          => $this->totalCount,
        ];
    }
}

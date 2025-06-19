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
    public const TYPE_NAME = 'foundChatMessages';

    public function __construct(
        /**
         * Approximate total number of messages found; -1 if unknown.
         */
        protected int   $totalCount,
        /**
         * List of messages.
         *
         * @var Message[]
         */
        protected array $messages,
        /**
         * The offset for the next request. If 0, there are no more results.
         */
        protected int   $nextFromMessageId
    ) {}

    public static function fromArray(array $array): FoundChatMessages
    {
        return new static(
            $array['total_count'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['messages']),
            $array['next_from_message_id'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'total_count'          => $this->totalCount,
            array_map(fn($x) => $x->typeSerialize(), $this->messages),
            'next_from_message_id' => $this->nextFromMessageId,
        ];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Found;

use Totaldev\TgSchema\TdObject;

/**
 * Contains a list of messages found by a search in a given chat
 */
class FoundChatMessages extends TdObject
{
    public const TYPE_NAME = 'foundChatMessages';

    /**
     * Approximate total number of messages found; -1 if unknown
     *
     * @var int
     */
    protected int $totalCount;

    /**
     * List of messages
     *
     * @var Message[]
     */
    protected array $messages;

    /**
     * The offset for the next request. If 0, there are no more results
     *
     * @var int
     */
    protected int $nextFromMessageId;

    public function __construct(int $totalCount, array $messages, int $nextFromMessageId)
    {
        $this->totalCount = $totalCount;
        $this->messages = $messages;
        $this->nextFromMessageId = $nextFromMessageId;
    }

    public static function fromArray(array $array): FoundChatMessages
    {
        return new static(
            $array['total_count'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['messages']),
            $array['next_from_message_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'total_count' => $this->totalCount,
            array_map(fn($x) => $x->typeSerialize(), $this->messages),
            'next_from_message_id' => $this->nextFromMessageId,
        ];
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function getMessages(): array
    {
        return $this->messages;
    }

    public function getNextFromMessageId(): int
    {
        return $this->nextFromMessageId;
    }
}

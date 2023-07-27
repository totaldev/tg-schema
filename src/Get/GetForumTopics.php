<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns found forum topics in a forum chat. This is a temporary method for getting information about topic list from the server
 */
class GetForumTopics extends TdFunction
{
    public const TYPE_NAME = 'getForumTopics';

    /**
     * Identifier of the forum chat
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Query to search for in the forum topic's name
     *
     * @var string
     */
    protected string $query;

    /**
     * The date starting from which the results need to be fetched. Use 0 or any date in the future to get results from the last topic
     *
     * @var int
     */
    protected int $offsetDate;

    /**
     * The message identifier of the last message in the last found topic, or 0 for the first request
     *
     * @var int
     */
    protected int $offsetMessageId;

    /**
     * The message thread identifier of the last found topic, or 0 for the first request
     *
     * @var int
     */
    protected int $offsetMessageThreadId;

    /**
     * The maximum number of forum topics to be returned; up to 100. For optimal performance, the number of returned forum topics is chosen by TDLib and can be smaller than the specified limit
     *
     * @var int
     */
    protected int $limit;

    public function __construct(
        int $chatId,
        string $query,
        int $offsetDate,
        int $offsetMessageId,
        int $offsetMessageThreadId,
        int $limit,
    ) {
        $this->chatId = $chatId;
        $this->query = $query;
        $this->offsetDate = $offsetDate;
        $this->offsetMessageId = $offsetMessageId;
        $this->offsetMessageThreadId = $offsetMessageThreadId;
        $this->limit = $limit;
    }

    public static function fromArray(array $array): GetForumTopics
    {
        return new static(
            $array['chat_id'],
            $array['query'],
            $array['offset_date'],
            $array['offset_message_id'],
            $array['offset_message_thread_id'],
            $array['limit'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'query' => $this->query,
            'offset_date' => $this->offsetDate,
            'offset_message_id' => $this->offsetMessageId,
            'offset_message_thread_id' => $this->offsetMessageThreadId,
            'limit' => $this->limit,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function getOffsetDate(): int
    {
        return $this->offsetDate;
    }

    public function getOffsetMessageId(): int
    {
        return $this->offsetMessageId;
    }

    public function getOffsetMessageThreadId(): int
    {
        return $this->offsetMessageThreadId;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }
}

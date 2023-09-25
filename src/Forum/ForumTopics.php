<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Forum;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a list of forum topics
 */
class ForumTopics extends TdObject
{
    public const TYPE_NAME = 'forumTopics';

    /**
     * Offset date for the next getForumTopics request
     *
     * @var int
     */
    protected int $nextOffsetDate;

    /**
     * Offset message identifier for the next getForumTopics request
     *
     * @var int
     */
    protected int $nextOffsetMessageId;

    /**
     * Offset message thread identifier for the next getForumTopics request
     *
     * @var int
     */
    protected int $nextOffsetMessageThreadId;

    /**
     * List of forum topics
     *
     * @var ForumTopic[]
     */
    protected array $topics;

    /**
     * Approximate total number of forum topics found
     *
     * @var int
     */
    protected int $totalCount;

    public function __construct(
        int   $totalCount,
        array $topics,
        int   $nextOffsetDate,
        int   $nextOffsetMessageId,
        int   $nextOffsetMessageThreadId,
    )
    {
        $this->totalCount = $totalCount;
        $this->topics = $topics;
        $this->nextOffsetDate = $nextOffsetDate;
        $this->nextOffsetMessageId = $nextOffsetMessageId;
        $this->nextOffsetMessageThreadId = $nextOffsetMessageThreadId;
    }

    public static function fromArray(array $array): ForumTopics
    {
        return new static(
            $array['total_count'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['topics']),
            $array['next_offset_date'],
            $array['next_offset_message_id'],
            $array['next_offset_message_thread_id'],
        );
    }

    public function getNextOffsetDate(): int
    {
        return $this->nextOffsetDate;
    }

    public function getNextOffsetMessageId(): int
    {
        return $this->nextOffsetMessageId;
    }

    public function getNextOffsetMessageThreadId(): int
    {
        return $this->nextOffsetMessageThreadId;
    }

    public function getTopics(): array
    {
        return $this->topics;
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
            array_map(fn($x) => $x->typeSerialize(), $this->topics),
            'next_offset_date' => $this->nextOffsetDate,
            'next_offset_message_id' => $this->nextOffsetMessageId,
            'next_offset_message_thread_id' => $this->nextOffsetMessageThreadId,
        ];
    }
}

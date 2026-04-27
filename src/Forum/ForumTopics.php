<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Forum;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a list of forum topics.
 */
class ForumTopics extends TdObject
{
    public const string TYPE_NAME = 'forumTopics';

    public function __construct(
        /**
         * Offset date for the next getForumTopics request.
         */
        protected int   $nextOffsetDate,
        /**
         * Offset forum topic identifier for the next getForumTopics request.
         */
        protected int   $nextOffsetForumTopicId,
        /**
         * Offset message identifier for the next getForumTopics request.
         */
        protected int   $nextOffsetMessageId,
        /**
         * List of forum topics.
         *
         * @var ForumTopic[]
         */
        protected array $topics,
        /**
         * Approximate total number of forum topics found.
         */
        protected int   $totalCount,
    ) {}

    public static function fromArray(array $array): ForumTopics
    {
        return new static(
            nextOffsetDate        : $array['next_offset_date'],
            nextOffsetForumTopicId: $array['next_offset_forum_topic_id'],
            nextOffsetMessageId   : $array['next_offset_message_id'],
            topics                : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['topics']),
            totalCount            : $array['total_count'],
        );
    }

    public function getNextOffsetDate(): int
    {
        return $this->nextOffsetDate;
    }

    public function getNextOffsetForumTopicId(): int
    {
        return $this->nextOffsetForumTopicId;
    }

    public function getNextOffsetMessageId(): int
    {
        return $this->nextOffsetMessageId;
    }

    public function getTopics(): array
    {
        return $this->topics;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function setNextOffsetDate(int $value): static
    {
        $this->nextOffsetDate = $value;

        return $this;
    }

    public function setNextOffsetForumTopicId(int $value): static
    {
        $this->nextOffsetForumTopicId = $value;

        return $this;
    }

    public function setNextOffsetMessageId(int $value): static
    {
        $this->nextOffsetMessageId = $value;

        return $this;
    }

    public function setTopics(array $value): static
    {
        $this->topics = $value;

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
            '@type'                      => static::TYPE_NAME,
            'next_offset_date'           => $this->nextOffsetDate,
            'next_offset_forum_topic_id' => $this->nextOffsetForumTopicId,
            'next_offset_message_id'     => $this->nextOffsetMessageId,
            'topics'                     => array_map(static fn($x) => $x->jsonSerialize(), $this->topics),
            'total_count'                => $this->totalCount,
        ];
    }
}

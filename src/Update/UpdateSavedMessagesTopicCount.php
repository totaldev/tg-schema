<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * Number of Saved Messages topics has changed.
 */
class UpdateSavedMessagesTopicCount extends Update
{
    public const string TYPE_NAME = 'updateSavedMessagesTopicCount';

    public function __construct(
        /**
         * Approximate total number of Saved Messages topics.
         */
        protected int $topicCount
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateSavedMessagesTopicCount
    {
        return new static(
            topicCount: $array['topic_count'],
        );
    }

    public function getTopicCount(): int
    {
        return $this->topicCount;
    }

    public function setTopicCount(int $value): static
    {
        $this->topicCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'topic_count' => $this->topicCount,
        ];
    }
}

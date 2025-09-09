<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes the order of pinned Saved Messages topics.
 */
class SetPinnedSavedMessagesTopics extends TdFunction
{
    public const TYPE_NAME = 'setPinnedSavedMessagesTopics';

    public function __construct(
        /**
         * Identifiers of the new pinned Saved Messages topics.
         *
         * @var int[]
         */
        protected array $savedMessagesTopicIds
    ) {}

    public static function fromArray(array $array): SetPinnedSavedMessagesTopics
    {
        return new static(
            $array['saved_messages_topic_ids'],
        );
    }

    public function getSavedMessagesTopicIds(): array
    {
        return $this->savedMessagesTopicIds;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                    => static::TYPE_NAME,
            'saved_messages_topic_ids' => $this->savedMessagesTopicIds,
        ];
    }
}

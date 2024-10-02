<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Delete;

use Totaldev\TgSchema\TdFunction;

/**
 * Deletes all messages in a Saved Messages topic.
 */
class DeleteSavedMessagesTopicHistory extends TdFunction
{
    public const TYPE_NAME = 'deleteSavedMessagesTopicHistory';

    public function __construct(
        /**
         * Identifier of Saved Messages topic which messages will be deleted.
         */
        protected int $savedMessagesTopicId
    ) {}

    public static function fromArray(array $array): DeleteSavedMessagesTopicHistory
    {
        return new static(
            $array['saved_messages_topic_id'],
        );
    }

    public function getSavedMessagesTopicId(): int
    {
        return $this->savedMessagesTopicId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'saved_messages_topic_id' => $this->savedMessagesTopicId,
        ];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * A topic in Saved Messages chat.
 */
class MessageTopicSavedMessages extends MessageTopic
{
    public const TYPE_NAME = 'messageTopicSavedMessages';

    public function __construct(
        /**
         * Unique identifier of the Saved Messages topic.
         */
        protected int $savedMessagesTopicId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageTopicSavedMessages
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

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * A topic in a channel direct messages chat administered by the current user.
 */
class MessageTopicDirectMessages extends MessageTopic
{
    public const TYPE_NAME = 'messageTopicDirectMessages';

    public function __construct(
        /**
         * Unique identifier of the topic.
         */
        protected int $directMessagesChatTopicId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageTopicDirectMessages
    {
        return new static(
            $array['direct_messages_chat_topic_id'],
        );
    }

    public function getDirectMessagesChatTopicId(): int
    {
        return $this->directMessagesChatTopicId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                         => static::TYPE_NAME,
            'direct_messages_chat_topic_id' => $this->directMessagesChatTopicId,
        ];
    }
}

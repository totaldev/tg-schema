<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * A topic in a non-forum supergroup chat.
 */
class MessageTopicThread extends MessageTopic
{
    public const TYPE_NAME = 'messageTopicThread';

    public function __construct(
        /**
         * Unique identifier of the message thread.
         */
        protected int $messageThreadId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageTopicThread
    {
        return new static(
            $array['message_thread_id'],
        );
    }

    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'message_thread_id' => $this->messageThreadId,
        ];
    }
}

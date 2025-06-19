<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Message\MessageTopic;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Number of messages in a topic has changed; for Saved Messages and channel direct messages chat topics only.
 */
class UpdateTopicMessageCount extends Update
{
    public const TYPE_NAME = 'updateTopicMessageCount';

    public function __construct(
        /**
         * Identifier of the chat in topic of which the number of messages has changed.
         */
        protected int          $chatId,
        /**
         * Identifier of the topic.
         */
        protected MessageTopic $topicId,
        /**
         * Approximate number of messages in the topics.
         */
        protected int          $messageCount
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateTopicMessageCount
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['topic_id']),
            $array['message_count'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageCount(): int
    {
        return $this->messageCount;
    }

    public function getTopicId(): MessageTopic
    {
        return $this->topicId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'chat_id'       => $this->chatId,
            'topic_id'      => $this->topicId->typeSerialize(),
            'message_count' => $this->messageCount,
        ];
    }
}

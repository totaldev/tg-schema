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
    public const string TYPE_NAME = 'updateTopicMessageCount';

    public function __construct(
        /**
         * Identifier of the chat in topic of which the number of messages has changed.
         */
        protected int          $chatId,
        /**
         * Approximate number of messages in the topic.
         */
        protected int          $messageCount,
        /**
         * Identifier of the topic.
         */
        protected MessageTopic $topicId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateTopicMessageCount
    {
        return new static(
            chatId      : $array['chat_id'],
            messageCount: $array['message_count'],
            topicId     : TdSchemaRegistry::fromArray($array['topic_id']),
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

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setMessageCount(int $value): static
    {
        $this->messageCount = $value;

        return $this;
    }

    public function setTopicId(MessageTopic $value): static
    {
        $this->topicId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'chat_id'       => $this->chatId,
            'message_count' => $this->messageCount,
            'topic_id'      => $this->topicId->jsonSerialize(),
        ];
    }
}

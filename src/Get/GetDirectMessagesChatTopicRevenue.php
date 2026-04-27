<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the total number of Telegram Stars received by the channel chat for direct messages from the given topic.
 */
class GetDirectMessagesChatTopicRevenue extends TdFunction
{
    public const string TYPE_NAME = 'getDirectMessagesChatTopicRevenue';

    public function __construct(
        /**
         * Chat identifier of the channel direct messages chat administered by the current user.
         */
        protected int $chatId,
        /**
         * Identifier of the topic.
         */
        protected int $topicId,
    ) {}

    public static function fromArray(array $array): GetDirectMessagesChatTopicRevenue
    {
        return new static(
            chatId : $array['chat_id'],
            topicId: $array['topic_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getTopicId(): int
    {
        return $this->topicId;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setTopicId(int $value): static
    {
        $this->topicId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'chat_id'  => $this->chatId,
            'topic_id' => $this->topicId,
        ];
    }
}

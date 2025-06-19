<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns information about the topic in a channel direct messages chat administered by the current user.
 */
class GetDirectMessagesChatTopic extends TdFunction
{
    public const TYPE_NAME = 'getDirectMessagesChatTopic';

    public function __construct(
        /**
         * Chat identifier of the channel direct messages chat.
         */
        protected int $chatId,
        /**
         * Identifier of the topic to get.
         */
        protected int $topicId
    ) {}

    public static function fromArray(array $array): GetDirectMessagesChatTopic
    {
        return new static(
            $array['chat_id'],
            $array['topic_id'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'chat_id'  => $this->chatId,
            'topic_id' => $this->topicId,
        ];
    }
}

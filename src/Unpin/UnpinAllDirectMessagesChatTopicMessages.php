<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Unpin;

use Totaldev\TgSchema\TdFunction;

/**
 * Removes all pinned messages from the topic in a channel direct messages chat administered by the current user.
 */
class UnpinAllDirectMessagesChatTopicMessages extends TdFunction
{
    public const TYPE_NAME = 'unpinAllDirectMessagesChatTopicMessages';

    public function __construct(
        /**
         * Identifier of the chat.
         */
        protected int $chatId,
        /**
         * Topic identifier.
         */
        protected int $topicId
    ) {}

    public static function fromArray(array $array): UnpinAllDirectMessagesChatTopicMessages
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

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Delete;

use Totaldev\TgSchema\TdFunction;

/**
 * Deletes all messages in the topic in a channel direct messages chat administered by the current user.
 */
class DeleteDirectMessagesChatTopicHistory extends TdFunction
{
    public const TYPE_NAME = 'deleteDirectMessagesChatTopicHistory';

    public function __construct(
        /**
         * Chat identifier of the channel direct messages chat.
         */
        protected int $chatId,
        /**
         * Identifier of the topic which messages will be deleted.
         */
        protected int $topicId
    ) {}

    public static function fromArray(array $array): DeleteDirectMessagesChatTopicHistory
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

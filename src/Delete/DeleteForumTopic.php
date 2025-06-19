<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Delete;

use Totaldev\TgSchema\TdFunction;

/**
 * Deletes all messages in a forum topic; requires can_delete_messages administrator right in the supergroup unless the user is creator of the topic, the topic
 * has no messages from other users and has at most 11 messages.
 */
class DeleteForumTopic extends TdFunction
{
    public const TYPE_NAME = 'deleteForumTopic';

    public function __construct(
        /**
         * Identifier of the chat.
         */
        protected int $chatId,
        /**
         * Message thread identifier of the forum topic.
         */
        protected int $messageThreadId
    ) {}

    public static function fromArray(array $array): DeleteForumTopic
    {
        return new static(
            $array['chat_id'],
            $array['message_thread_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'chat_id'           => $this->chatId,
            'message_thread_id' => $this->messageThreadId,
        ];
    }
}

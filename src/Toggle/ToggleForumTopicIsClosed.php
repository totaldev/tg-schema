<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Toggles whether a topic is closed in a forum supergroup chat; requires can_manage_topics right in the supergroup unless the user is creator of the topic.
 */
class ToggleForumTopicIsClosed extends TdFunction
{
    public const TYPE_NAME = 'toggleForumTopicIsClosed';

    public function __construct(
        /**
         * Identifier of the chat.
         */
        protected int  $chatId,
        /**
         * Message thread identifier of the forum topic.
         */
        protected int  $messageThreadId,
        /**
         * Pass true to close the topic; pass false to reopen it.
         */
        protected bool $isClosed
    ) {}

    public static function fromArray(array $array): ToggleForumTopicIsClosed
    {
        return new static(
            $array['chat_id'],
            $array['message_thread_id'],
            $array['is_closed'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getIsClosed(): bool
    {
        return $this->isClosed;
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
            'is_closed'         => $this->isClosed,
        ];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns an HTTPS link to a topic in a forum chat. This is an offline request.
 */
class GetForumTopicLink extends TdFunction
{
    public const TYPE_NAME = 'getForumTopicLink';

    public function __construct(
        /**
         * Identifier of the chat.
         */
        protected int $chatId,
        /**
         * Message thread identifier of the forum topic.
         */
        protected int $messageThreadId,
    ) {}

    public static function fromArray(array $array): GetForumTopicLink
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

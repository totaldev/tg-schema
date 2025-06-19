<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Read;

use Totaldev\TgSchema\TdFunction;

/**
 * Marks all mentions in a forum topic as read.
 */
class ReadAllMessageThreadMentions extends TdFunction
{
    public const TYPE_NAME = 'readAllMessageThreadMentions';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int $chatId,
        /**
         * Message thread identifier in which mentions are marked as read.
         */
        protected int $messageThreadId
    ) {}

    public static function fromArray(array $array): ReadAllMessageThreadMentions
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

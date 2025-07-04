<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes the pinned state of a forum topic; requires can_manage_topics right in the supergroup. There can be up to getOption("pinned_forum_topic_count_max")
 * pinned forum topics.
 */
class ToggleForumTopicIsPinned extends TdFunction
{
    public const TYPE_NAME = 'toggleForumTopicIsPinned';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int  $chatId,
        /**
         * Message thread identifier of the forum topic.
         */
        protected int  $messageThreadId,
        /**
         * Pass true to pin the topic; pass false to unpin it.
         */
        protected bool $isPinned
    ) {}

    public static function fromArray(array $array): ToggleForumTopicIsPinned
    {
        return new static(
            $array['chat_id'],
            $array['message_thread_id'],
            $array['is_pinned'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
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
            'is_pinned'         => $this->isPinned,
        ];
    }
}

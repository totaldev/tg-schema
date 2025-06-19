<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes the marked as unread state of the topic in a channel direct messages chat administered by the current user.
 */
class SetDirectMessagesChatTopicIsMarkedAsUnread extends TdFunction
{
    public const TYPE_NAME = 'setDirectMessagesChatTopicIsMarkedAsUnread';

    public function __construct(
        /**
         * Chat identifier of the channel direct messages chat.
         */
        protected int  $chatId,
        /**
         * Topic identifier.
         */
        protected int  $topicId,
        /**
         * New value of is_marked_as_unread.
         */
        protected bool $isMarkedAsUnread
    ) {}

    public static function fromArray(array $array): SetDirectMessagesChatTopicIsMarkedAsUnread
    {
        return new static(
            $array['chat_id'],
            $array['topic_id'],
            $array['is_marked_as_unread'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getIsMarkedAsUnread(): bool
    {
        return $this->isMarkedAsUnread;
    }

    public function getTopicId(): int
    {
        return $this->topicId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'chat_id'             => $this->chatId,
            'topic_id'            => $this->topicId,
            'is_marked_as_unread' => $this->isMarkedAsUnread,
        ];
    }
}

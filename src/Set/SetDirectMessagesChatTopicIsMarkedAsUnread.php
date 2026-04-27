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
    public const string TYPE_NAME = 'setDirectMessagesChatTopicIsMarkedAsUnread';

    public function __construct(
        /**
         * Chat identifier of the channel direct messages chat.
         */
        protected int  $chatId,
        /**
         * New value of is_marked_as_unread.
         */
        protected bool $isMarkedAsUnread,
        /**
         * Topic identifier.
         */
        protected int  $topicId,
    ) {}

    public static function fromArray(array $array): SetDirectMessagesChatTopicIsMarkedAsUnread
    {
        return new static(
            chatId          : $array['chat_id'],
            isMarkedAsUnread: $array['is_marked_as_unread'],
            topicId         : $array['topic_id'],
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

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setIsMarkedAsUnread(bool $value): static
    {
        $this->isMarkedAsUnread = $value;

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
            '@type'               => static::TYPE_NAME,
            'chat_id'             => $this->chatId,
            'is_marked_as_unread' => $this->isMarkedAsUnread,
            'topic_id'            => $this->topicId,
        ];
    }
}

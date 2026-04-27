<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Read;

use Totaldev\TgSchema\TdFunction;

/**
 * Marks all reactions in a topic in a forum supergroup chat or a chat with a bot with topics as read.
 */
class ReadAllForumTopicReactions extends TdFunction
{
    public const string TYPE_NAME = 'readAllForumTopicReactions';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int $chatId,
        /**
         * Forum topic identifier in which reactions are marked as read.
         */
        protected int $forumTopicId,
    ) {}

    public static function fromArray(array $array): ReadAllForumTopicReactions
    {
        return new static(
            chatId      : $array['chat_id'],
            forumTopicId: $array['forum_topic_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getForumTopicId(): int
    {
        return $this->forumTopicId;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setForumTopicId(int $value): static
    {
        $this->forumTopicId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'chat_id'        => $this->chatId,
            'forum_topic_id' => $this->forumTopicId,
        ];
    }
}

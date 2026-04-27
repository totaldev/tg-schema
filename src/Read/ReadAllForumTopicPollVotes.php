<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Read;

use Totaldev\TgSchema\TdFunction;

/**
 * Marks all poll votes in a topic in a forum supergroup chat as read.
 */
class ReadAllForumTopicPollVotes extends TdFunction
{
    public const string TYPE_NAME = 'readAllForumTopicPollVotes';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int $chatId,
        /**
         * Forum topic identifier in which poll votes are marked as read.
         */
        protected int $forumTopicId,
    ) {}

    public static function fromArray(array $array): ReadAllForumTopicPollVotes
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

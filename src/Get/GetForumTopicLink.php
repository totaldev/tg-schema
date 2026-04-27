<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns an HTTPS link to a topic in a forum supergroup chat. This is an offline method.
 */
class GetForumTopicLink extends TdFunction
{
    public const string TYPE_NAME = 'getForumTopicLink';

    public function __construct(
        /**
         * Identifier of the chat.
         */
        protected int $chatId,
        /**
         * Forum topic identifier.
         */
        protected int $forumTopicId,
    ) {}

    public static function fromArray(array $array): GetForumTopicLink
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

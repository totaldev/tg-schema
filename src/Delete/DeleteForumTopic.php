<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Delete;

use Totaldev\TgSchema\TdFunction;

/**
 * Deletes all messages from a topic in a forum supergroup chat or a chat with a bot with topics; requires can_delete_messages administrator right in the
 * supergroup unless the user is creator of the topic, the topic has no messages from other users and has at most 11 messages.
 */
class DeleteForumTopic extends TdFunction
{
    public const string TYPE_NAME = 'deleteForumTopic';

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

    public static function fromArray(array $array): DeleteForumTopic
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

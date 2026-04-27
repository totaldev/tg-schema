<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Unpin;

use Totaldev\TgSchema\TdFunction;

/**
 * Removes all pinned messages from a topic in a forum supergroup chat or a chat with a bot with topics; requires can_pin_messages member right in the
 * supergroup.
 */
class UnpinAllForumTopicMessages extends TdFunction
{
    public const string TYPE_NAME = 'unpinAllForumTopicMessages';

    public function __construct(
        /**
         * Identifier of the chat.
         */
        protected int $chatId,
        /**
         * Forum topic identifier in which messages will be unpinned.
         */
        protected int $forumTopicId,
    ) {}

    public static function fromArray(array $array): UnpinAllForumTopicMessages
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

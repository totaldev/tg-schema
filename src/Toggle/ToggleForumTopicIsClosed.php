<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Toggles whether a topic is closed in a forum supergroup chat; requires can_manage_topics administrator right in the supergroup unless the user is creator of
 * the topic.
 */
class ToggleForumTopicIsClosed extends TdFunction
{
    public const string TYPE_NAME = 'toggleForumTopicIsClosed';

    public function __construct(
        /**
         * Identifier of the chat.
         */
        protected int  $chatId,
        /**
         * Forum topic identifier.
         */
        protected int  $forumTopicId,
        /**
         * Pass true to close the topic; pass false to reopen it.
         */
        protected bool $isClosed,
    ) {}

    public static function fromArray(array $array): ToggleForumTopicIsClosed
    {
        return new static(
            chatId      : $array['chat_id'],
            forumTopicId: $array['forum_topic_id'],
            isClosed    : $array['is_closed'],
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

    public function getIsClosed(): bool
    {
        return $this->isClosed;
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

    public function setIsClosed(bool $value): static
    {
        $this->isClosed = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'chat_id'        => $this->chatId,
            'forum_topic_id' => $this->forumTopicId,
            'is_closed'      => $this->isClosed,
        ];
    }
}

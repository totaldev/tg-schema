<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes the pinned state of a topic in a forum supergroup chat or a chat with a bot with topics; requires can_manage_topics administrator right in the
 * supergroup. There can be up to getOption("pinned_forum_topic_count_max") pinned forum topics.
 */
class ToggleForumTopicIsPinned extends TdFunction
{
    public const string TYPE_NAME = 'toggleForumTopicIsPinned';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int  $chatId,
        /**
         * Forum topic identifier.
         */
        protected int  $forumTopicId,
        /**
         * Pass true to pin the topic; pass false to unpin it.
         */
        protected bool $isPinned,
    ) {}

    public static function fromArray(array $array): ToggleForumTopicIsPinned
    {
        return new static(
            $array['chat_id'],
            $array['forum_topic_id'],
            $array['is_pinned'],
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

    public function getIsPinned(): bool
    {
        return $this->isPinned;
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

    public function setIsPinned(bool $value): static
    {
        $this->isPinned = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'chat_id'        => $this->chatId,
            'forum_topic_id' => $this->forumTopicId,
            'is_pinned'      => $this->isPinned,
        ];
    }
}

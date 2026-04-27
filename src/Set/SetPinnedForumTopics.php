<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes the order of pinned topics in a forum supergroup chat or a chat with a bot with topics; requires can_manage_topics administrator right in the
 * supergroup.
 */
class SetPinnedForumTopics extends TdFunction
{
    public const string TYPE_NAME = 'setPinnedForumTopics';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int   $chatId,
        /**
         * The new list of identifiers of the pinned forum topics.
         *
         * @var int[]
         */
        protected array $forumTopicIds,
    ) {}

    public static function fromArray(array $array): SetPinnedForumTopics
    {
        return new static(
            chatId       : $array['chat_id'],
            forumTopicIds: $array['forum_topic_ids'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getForumTopicIds(): array
    {
        return $this->forumTopicIds;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setForumTopicIds(array $value): static
    {
        $this->forumTopicIds = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'chat_id'         => $this->chatId,
            'forum_topic_ids' => $this->forumTopicIds,
        ];
    }
}

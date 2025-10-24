<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * A topic in a forum supergroup chat or a chat with a bot.
 */
class MessageTopicForum extends MessageTopic
{
    public const string TYPE_NAME = 'messageTopicForum';

    public function __construct(
        /**
         * Unique identifier of the forum topic.
         */
        protected int $forumTopicId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageTopicForum
    {
        return new static(
            $array['forum_topic_id'],
        );
    }

    public function getForumTopicId(): int
    {
        return $this->forumTopicId;
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
            'forum_topic_id' => $this->forumTopicId,
        ];
    }
}

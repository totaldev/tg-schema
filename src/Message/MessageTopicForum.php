<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * A topic in a forum supergroup chat.
 */
class MessageTopicForum extends MessageTopic
{
    public const TYPE_NAME = 'messageTopicForum';

    public function __construct(
        /**
         * Unique identifier of the forum topic; all messages in a non-forum supergroup chats belongs to the General topic.
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

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'forum_topic_id' => $this->forumTopicId,
        ];
    }
}

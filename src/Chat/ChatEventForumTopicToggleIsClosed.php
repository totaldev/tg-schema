<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\Forum\ForumTopicInfo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A forum topic was closed or reopened.
 */
class ChatEventForumTopicToggleIsClosed extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventForumTopicToggleIsClosed';

    public function __construct(
        /**
         * New information about the topic.
         */
        protected ForumTopicInfo $topicInfo
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventForumTopicToggleIsClosed
    {
        return new static(
            TdSchemaRegistry::fromArray($array['topic_info']),
        );
    }

    public function getTopicInfo(): ForumTopicInfo
    {
        return $this->topicInfo;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'topic_info' => $this->topicInfo->typeSerialize(),
        ];
    }
}

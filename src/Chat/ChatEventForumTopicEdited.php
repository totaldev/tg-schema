<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\Forum\ForumTopicInfo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A forum topic was edited.
 */
class ChatEventForumTopicEdited extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventForumTopicEdited';

    public function __construct(
        /**
         * Old information about the topic.
         */
        protected ForumTopicInfo $oldTopicInfo,
        /**
         * New information about the topic.
         */
        protected ForumTopicInfo $newTopicInfo
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventForumTopicEdited
    {
        return new static(
            TdSchemaRegistry::fromArray($array['old_topic_info']),
            TdSchemaRegistry::fromArray($array['new_topic_info']),
        );
    }

    public function getNewTopicInfo(): ForumTopicInfo
    {
        return $this->newTopicInfo;
    }

    public function getOldTopicInfo(): ForumTopicInfo
    {
        return $this->oldTopicInfo;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'old_topic_info' => $this->oldTopicInfo->typeSerialize(),
            'new_topic_info' => $this->newTopicInfo->typeSerialize(),
        ];
    }
}

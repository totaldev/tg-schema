<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\Forum\ForumTopicInfo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A pinned forum topic was changed.
 */
class ChatEventForumTopicPinned extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventForumTopicPinned';

    public function __construct(
        /**
         * Information about the old pinned topic; may be null.
         */
        protected ?ForumTopicInfo $oldTopicInfo,
        /**
         * Information about the new pinned topic; may be null.
         */
        protected ?ForumTopicInfo $newTopicInfo
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventForumTopicPinned
    {
        return new static(
            isset($array['old_topic_info']) ? TdSchemaRegistry::fromArray($array['old_topic_info']) : null,
            isset($array['new_topic_info']) ? TdSchemaRegistry::fromArray($array['new_topic_info']) : null,
        );
    }

    public function getNewTopicInfo(): ?ForumTopicInfo
    {
        return $this->newTopicInfo;
    }

    public function getOldTopicInfo(): ?ForumTopicInfo
    {
        return $this->oldTopicInfo;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'old_topic_info' => (isset($this->oldTopicInfo) ? $this->oldTopicInfo : null),
            'new_topic_info' => (isset($this->newTopicInfo) ? $this->newTopicInfo : null),
        ];
    }
}

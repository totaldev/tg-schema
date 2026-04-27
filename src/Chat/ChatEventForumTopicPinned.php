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
    public const string TYPE_NAME = 'chatEventForumTopicPinned';

    public function __construct(
        /**
         * Information about the new pinned topic; may be null.
         */
        protected ?ForumTopicInfo $newTopicInfo,
        /**
         * Information about the old pinned topic; may be null.
         */
        protected ?ForumTopicInfo $oldTopicInfo,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventForumTopicPinned
    {
        return new static(
            newTopicInfo: (isset($array['new_topic_info']) ? TdSchemaRegistry::fromArray($array['new_topic_info']) : null),
            oldTopicInfo: (isset($array['old_topic_info']) ? TdSchemaRegistry::fromArray($array['old_topic_info']) : null),
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

    public function setNewTopicInfo(?ForumTopicInfo $value): static
    {
        $this->newTopicInfo = $value;

        return $this;
    }

    public function setOldTopicInfo(?ForumTopicInfo $value): static
    {
        $this->oldTopicInfo = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'new_topic_info' => (null !== $this->newTopicInfo ? $this->newTopicInfo->jsonSerialize() : null),
            'old_topic_info' => (null !== $this->oldTopicInfo ? $this->oldTopicInfo->jsonSerialize() : null),
        ];
    }
}

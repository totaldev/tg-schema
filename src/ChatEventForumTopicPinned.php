<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * A pinned forum topic was changed
 */
class ChatEventForumTopicPinned extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventForumTopicPinned';

    /**
     * Information about the old pinned topic; may be null
     *
     * @var ForumTopicInfo|null
     */
    protected ?ForumTopicInfo $oldTopicInfo;

    /**
     * Information about the new pinned topic; may be null
     *
     * @var ForumTopicInfo|null
     */
    protected ?ForumTopicInfo $newTopicInfo;

    public function __construct(?ForumTopicInfo $oldTopicInfo, ?ForumTopicInfo $newTopicInfo)
    {
        parent::__construct();

        $this->oldTopicInfo = $oldTopicInfo;
        $this->newTopicInfo = $newTopicInfo;
    }

    public static function fromArray(array $array): ChatEventForumTopicPinned
    {
        return new static(
            (isset($array['old_topic_info']) ? TdSchemaRegistry::fromArray($array['old_topic_info']) : null),
            (isset($array['new_topic_info']) ? TdSchemaRegistry::fromArray($array['new_topic_info']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'old_topic_info' => (isset($this->oldTopicInfo) ? $this->oldTopicInfo : null),
            'new_topic_info' => (isset($this->newTopicInfo) ? $this->newTopicInfo : null),
        ];
    }

    public function getOldTopicInfo(): ?ForumTopicInfo
    {
        return $this->oldTopicInfo;
    }

    public function getNewTopicInfo(): ?ForumTopicInfo
    {
        return $this->newTopicInfo;
    }
}

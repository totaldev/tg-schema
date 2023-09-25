<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\Forum\ForumTopicInfo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A forum topic was deleted
 */
class ChatEventForumTopicDeleted extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventForumTopicDeleted';

    /**
     * Information about the topic
     *
     * @var ForumTopicInfo
     */
    protected ForumTopicInfo $topicInfo;

    public function __construct(ForumTopicInfo $topicInfo)
    {
        parent::__construct();

        $this->topicInfo = $topicInfo;
    }

    public static function fromArray(array $array): ChatEventForumTopicDeleted
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
            '@type' => static::TYPE_NAME,
            'topic_info' => $this->topicInfo->typeSerialize(),
        ];
    }
}

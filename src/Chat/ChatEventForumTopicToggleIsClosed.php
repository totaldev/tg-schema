<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\Forum\ForumTopicInfo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A forum topic was closed or reopened
 */
class ChatEventForumTopicToggleIsClosed extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventForumTopicToggleIsClosed';

    /**
     * New information about the topic
     *
     * @var ForumTopicInfo
     */
    protected ForumTopicInfo $topicInfo;

    public function __construct(ForumTopicInfo $topicInfo)
    {
        parent::__construct();

        $this->topicInfo = $topicInfo;
    }

    public static function fromArray(array $array): ChatEventForumTopicToggleIsClosed
    {
        return new static(
            TdSchemaRegistry::fromArray($array['topic_info']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'topic_info' => $this->topicInfo->typeSerialize(),
        ];
    }

    public function getTopicInfo(): ForumTopicInfo
    {
        return $this->topicInfo;
    }
}

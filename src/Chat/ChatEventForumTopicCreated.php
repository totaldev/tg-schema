<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Chat;

/**
 * A new forum topic was created
 */
class ChatEventForumTopicCreated extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventForumTopicCreated';

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

    public static function fromArray(array $array): ChatEventForumTopicCreated
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

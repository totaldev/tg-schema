<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * The General forum topic was hidden or unhidden
 */
class ChatEventForumTopicToggleIsHidden extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventForumTopicToggleIsHidden';

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

    public static function fromArray(array $array): ChatEventForumTopicToggleIsHidden
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

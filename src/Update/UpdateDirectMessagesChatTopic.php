<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Direct\DirectMessagesChatTopic;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Basic information about a topic in a channel direct messages chat administered by the current user has changed. This update is guaranteed to come before the
 * topic identifier is returned to the application.
 */
class UpdateDirectMessagesChatTopic extends Update
{
    public const TYPE_NAME = 'updateDirectMessagesChatTopic';

    public function __construct(
        /**
         * New data about the topic.
         */
        protected DirectMessagesChatTopic $topic
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateDirectMessagesChatTopic
    {
        return new static(
            TdSchemaRegistry::fromArray($array['topic']),
        );
    }

    public function getTopic(): DirectMessagesChatTopic
    {
        return $this->topic;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'topic' => $this->topic->typeSerialize(),
        ];
    }
}

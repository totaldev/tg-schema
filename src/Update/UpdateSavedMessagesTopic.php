<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Saved\SavedMessagesTopic;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Basic information about a Saved Messages topic has changed. This update is guaranteed to come before the topic identifier is returned to the application.
 */
class UpdateSavedMessagesTopic extends Update
{
    public const TYPE_NAME = 'updateSavedMessagesTopic';

    public function __construct(
        /**
         * New data about the topic.
         */
        protected SavedMessagesTopic $topic
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateSavedMessagesTopic
    {
        return new static(
            TdSchemaRegistry::fromArray($array['topic']),
        );
    }

    public function getTopic(): SavedMessagesTopic
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

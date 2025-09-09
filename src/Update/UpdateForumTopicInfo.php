<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Forum\ForumTopicInfo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Basic information about a topic in a forum chat was changed.
 */
class UpdateForumTopicInfo extends Update
{
    public const TYPE_NAME = 'updateForumTopicInfo';

    public function __construct(
        /**
         * New information about the topic.
         */
        protected ForumTopicInfo $info
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateForumTopicInfo
    {
        return new static(
            TdSchemaRegistry::fromArray($array['info']),
        );
    }

    public function getInfo(): ForumTopicInfo
    {
        return $this->info;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'info'  => $this->info->typeSerialize(),
        ];
    }
}

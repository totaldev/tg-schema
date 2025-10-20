<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Supergroup;

use Totaldev\TgSchema\Message\MessageTopic;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns users which can be mentioned in the supergroup.
 */
class SupergroupMembersFilterMention extends SupergroupMembersFilter
{
    public const TYPE_NAME = 'supergroupMembersFilterMention';

    public function __construct(
        /**
         * Query to search for.
         */
        protected string        $query,
        /**
         * Identifier of the topic in which the users will be mentioned; pass null if none.
         */
        protected ?MessageTopic $topicId = null,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): SupergroupMembersFilterMention
    {
        return new static(
            $array['query'],
            isset($array['topic_id']) ? TdSchemaRegistry::fromArray($array['topic_id']) : null,
        );
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function getTopicId(): ?MessageTopic
    {
        return $this->topicId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'query'    => $this->query,
            'topic_id' => $this->topicId ?? null,
        ];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\Message\MessageTopic;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns users which can be mentioned in the chat.
 */
class ChatMembersFilterMention extends ChatMembersFilter
{
    public const string TYPE_NAME = 'chatMembersFilterMention';

    public function __construct(
        /**
         * Identifier of the topic in which the users will be mentioned; pass null if none.
         */
        protected ?MessageTopic $topicId = null
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatMembersFilterMention
    {
        return new static(
            isset($array['topic_id']) ? TdSchemaRegistry::fromArray($array['topic_id']) : null,
        );
    }

    public function getTopicId(): ?MessageTopic
    {
        return $this->topicId;
    }

    public function setTopicId(?MessageTopic $value): static
    {
        $this->topicId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'topic_id' => $this->topicId ?? null,
        ];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Saved\SavedMessagesTags;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Tags used in Saved Messages or a Saved Messages topic have changed.
 */
class UpdateSavedMessagesTags extends Update
{
    public const TYPE_NAME = 'updateSavedMessagesTags';

    public function __construct(
        /**
         * Identifier of Saved Messages topic which tags were changed; 0 if tags for the whole chat has changed.
         */
        protected int               $savedMessagesTopicId,
        /**
         * The new tags.
         */
        protected SavedMessagesTags $tags,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateSavedMessagesTags
    {
        return new static(
            $array['saved_messages_topic_id'],
            TdSchemaRegistry::fromArray($array['tags']),
        );
    }

    public function getSavedMessagesTopicId(): int
    {
        return $this->savedMessagesTopicId;
    }

    public function getTags(): SavedMessagesTags
    {
        return $this->tags;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'saved_messages_topic_id' => $this->savedMessagesTopicId,
            'tags'                    => $this->tags->typeSerialize(),
        ];
    }
}

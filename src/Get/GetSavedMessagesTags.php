<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns tags used in Saved Messages or a Saved Messages topic.
 */
class GetSavedMessagesTags extends TdFunction
{
    public const TYPE_NAME = 'getSavedMessagesTags';

    public function __construct(
        /**
         * Identifier of Saved Messages topic which tags will be returned; pass 0 to get all Saved Messages tags.
         */
        protected int $savedMessagesTopicId
    ) {}

    public static function fromArray(array $array): GetSavedMessagesTags
    {
        return new static(
            $array['saved_messages_topic_id'],
        );
    }

    public function getSavedMessagesTopicId(): int
    {
        return $this->savedMessagesTopicId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'saved_messages_topic_id' => $this->savedMessagesTopicId,
        ];
    }
}

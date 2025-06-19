<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes the pinned state of a Saved Messages topic. There can be up to getOption("pinned_saved_messages_topic_count_max") pinned topics. The limit can be
 * increased with Telegram Premium.
 */
class ToggleSavedMessagesTopicIsPinned extends TdFunction
{
    public const TYPE_NAME = 'toggleSavedMessagesTopicIsPinned';

    public function __construct(
        /**
         * Identifier of Saved Messages topic to pin or unpin.
         */
        protected int  $savedMessagesTopicId,
        /**
         * Pass true to pin the topic; pass false to unpin it.
         */
        protected bool $isPinned
    ) {}

    public static function fromArray(array $array): ToggleSavedMessagesTopicIsPinned
    {
        return new static(
            $array['saved_messages_topic_id'],
            $array['is_pinned'],
        );
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
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
            'is_pinned'               => $this->isPinned,
        ];
    }
}

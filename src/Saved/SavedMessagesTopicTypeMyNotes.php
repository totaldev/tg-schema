<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Saved;

/**
 * Topic containing messages sent by the current user of forwarded from an unknown chat.
 */
class SavedMessagesTopicTypeMyNotes extends SavedMessagesTopicType
{
    public const TYPE_NAME = 'savedMessagesTopicTypeMyNotes';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SavedMessagesTopicTypeMyNotes
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

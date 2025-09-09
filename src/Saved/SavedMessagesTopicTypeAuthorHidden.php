<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Saved;

/**
 * Topic containing messages forwarded from a user with hidden privacy.
 */
class SavedMessagesTopicTypeAuthorHidden extends SavedMessagesTopicType
{
    public const TYPE_NAME = 'savedMessagesTopicTypeAuthorHidden';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SavedMessagesTopicTypeAuthorHidden
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

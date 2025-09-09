<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Saved;

use Totaldev\TgSchema\TdObject;

/**
 * Describes type of Saved Messages topic.
 */
class SavedMessagesTopicType extends TdObject
{
    public const TYPE_NAME = 'SavedMessagesTopicType';

    public function __construct() {}

    public static function fromArray(array $array): SavedMessagesTopicType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

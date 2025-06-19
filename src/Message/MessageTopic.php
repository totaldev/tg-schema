<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a topic of messages in a chat.
 */
class MessageTopic extends TdObject
{
    public const TYPE_NAME = 'MessageTopic';

    public function __construct() {}

    public static function fromArray(array $array): MessageTopic
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

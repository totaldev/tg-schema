<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * The message is from history of a topic in a channel direct messages chat administered by the current user.
 */
class MessageSourceDirectMessagesChatTopicHistory extends MessageSource
{
    public const TYPE_NAME = 'messageSourceDirectMessagesChatTopicHistory';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageSourceDirectMessagesChatTopicHistory
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

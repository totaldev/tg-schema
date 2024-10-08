<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * The message is from a chat history.
 */
class MessageSourceChatHistory extends MessageSource
{
    public const TYPE_NAME = 'messageSourceChatHistory';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageSourceChatHistory
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

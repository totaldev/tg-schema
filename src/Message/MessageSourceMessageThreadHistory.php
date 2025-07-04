<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * The message is from history of a message thread.
 */
class MessageSourceMessageThreadHistory extends MessageSource
{
    public const TYPE_NAME = 'messageSourceMessageThreadHistory';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageSourceMessageThreadHistory
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

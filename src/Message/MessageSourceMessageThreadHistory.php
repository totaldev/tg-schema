<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The message is from a message thread history
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

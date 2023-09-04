<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about the sending state of the message
 */
class MessageSendingState extends TdObject
{
    public const TYPE_NAME = 'MessageSendingState';

    public function __construct()
    {
    }

    public static function fromArray(array $array): MessageSendingState
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

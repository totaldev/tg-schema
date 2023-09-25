<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about the time when a scheduled message will be sent
 */
class MessageSchedulingState extends TdObject
{
    public const TYPE_NAME = 'MessageSchedulingState';

    public function __construct()
    {
    }

    public static function fromArray(array $array): MessageSchedulingState
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * The message is too old to get read date.
 */
class MessageReadDateTooOld extends MessageReadDate
{
    public const TYPE_NAME = 'messageReadDateTooOld';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageReadDateTooOld
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

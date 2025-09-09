<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdObject;

/**
 * Contains information about the message or the story to be replied.
 */
class InputMessageReplyTo extends TdObject
{
    public const TYPE_NAME = 'InputMessageReplyTo';

    public function __construct() {}

    public static function fromArray(array $array): InputMessageReplyTo
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

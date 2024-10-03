<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdObject;

/**
 * The content of a message to send.
 */
class InputMessageContent extends TdObject
{
    public const TYPE_NAME = 'InputMessageContent';

    public function __construct() {}

    public static function fromArray(array $array): InputMessageContent
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

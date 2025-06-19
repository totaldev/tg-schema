<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a non-joined group call that isn't bound to a chat.
 */
class InputGroupCall extends TdObject
{
    public const TYPE_NAME = 'InputGroupCall';

    public function __construct() {}

    public static function fromArray(array $array): InputGroupCall
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

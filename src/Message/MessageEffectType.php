<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdObject;

/**
 * Describes type of emoji effect.
 */
class MessageEffectType extends TdObject
{
    public const TYPE_NAME = 'MessageEffectType';

    public function __construct() {}

    public static function fromArray(array $array): MessageEffectType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;

/**
 * Describes source of a chat boost.
 */
class ChatBoostSource extends TdObject
{
    public const TYPE_NAME = 'ChatBoostSource';

    public function __construct() {}

    public static function fromArray(array $array): ChatBoostSource
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

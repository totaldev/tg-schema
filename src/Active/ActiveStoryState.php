<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Active;

use Totaldev\TgSchema\TdObject;

/**
 * Describes state of active stories posted by a chat.
 */
class ActiveStoryState extends TdObject
{
    public const string TYPE_NAME = 'ActiveStoryState';

    public function __construct() {}

    public static function fromArray(array $array): ActiveStoryState
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

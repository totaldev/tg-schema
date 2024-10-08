<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Reaction;

use Totaldev\TgSchema\TdObject;

/**
 * Describes type of message reaction.
 */
class ReactionType extends TdObject
{
    public const TYPE_NAME = 'ReactionType';

    public function __construct() {}

    public static function fromArray(array $array): ReactionType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

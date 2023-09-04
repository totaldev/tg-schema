<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Reaction;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes type of message reaction
 */
class ReactionType extends TdObject
{
    public const TYPE_NAME = 'ReactionType';

    public function __construct()
    {
    }

    public static function fromArray(array $array): ReactionType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

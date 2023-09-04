<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns TGS stickers with generic animations for custom emoji reactions
 */
class GetCustomEmojiReactionAnimations extends TdFunction
{
    public const TYPE_NAME = 'getCustomEmojiReactionAnimations';

    public function __construct()
    {
    }

    public static function fromArray(array $array): GetCustomEmojiReactionAnimations
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

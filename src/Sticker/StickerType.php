<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Sticker;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes type of a sticker
 */
class StickerType extends TdObject
{
    public const TYPE_NAME = 'StickerType';

    public function __construct()
    {
    }

    public static function fromArray(array $array): StickerType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Sticker;

use Totaldev\TgSchema\TdObject;

/**
 * Contains full information about sticker type.
 */
class StickerFullType extends TdObject
{
    public const TYPE_NAME = 'StickerFullType';

    public function __construct() {}

    public static function fromArray(array $array): StickerFullType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Describes format of a sticker
 */
class StickerFormat extends TdObject
{
    public const TYPE_NAME = 'StickerFormat';

    public function __construct()
    {
    }

    public static function fromArray(array $array): StickerFormat
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

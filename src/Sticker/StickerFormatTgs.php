<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Sticker;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The sticker is an animation in TGS format
 */
class StickerFormatTgs extends StickerFormat
{
    public const TYPE_NAME = 'stickerFormatTgs';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): StickerFormatTgs
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

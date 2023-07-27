<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;

/**
 * Describes type of a sticker, which was used to create a chat photo
 */
class ChatPhotoStickerType extends TdObject
{
    public const TYPE_NAME = 'ChatPhotoStickerType';

    public function __construct()
    {
    }

    public static function fromArray(array $array): ChatPhotoStickerType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

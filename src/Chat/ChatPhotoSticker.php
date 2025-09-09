<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\Background\BackgroundFill;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Information about the sticker, which was used to create the chat photo. The sticker is shown at the center of the photo and occupies at most 67% of it.
 */
class ChatPhotoSticker extends TdObject
{
    public const TYPE_NAME = 'chatPhotoSticker';

    public function __construct(
        /**
         * Type of the sticker.
         */
        protected ChatPhotoStickerType $type,
        /**
         * The fill to be used as background for the sticker; rotation angle in backgroundFillGradient isn't supported.
         */
        protected BackgroundFill       $backgroundFill,
    ) {}

    public static function fromArray(array $array): ChatPhotoSticker
    {
        return new static(
            TdSchemaRegistry::fromArray($array['type']),
            TdSchemaRegistry::fromArray($array['background_fill']),
        );
    }

    public function getBackgroundFill(): BackgroundFill
    {
        return $this->backgroundFill;
    }

    public function getType(): ChatPhotoStickerType
    {
        return $this->type;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'type'            => $this->type->typeSerialize(),
            'background_fill' => $this->backgroundFill->typeSerialize(),
        ];
    }
}

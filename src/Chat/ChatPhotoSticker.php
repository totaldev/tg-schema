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
    public const string TYPE_NAME = 'chatPhotoSticker';

    public function __construct(
        /**
         * The fill to be used as background for the sticker; rotation angle in backgroundFillGradient isn't supported.
         */
        protected BackgroundFill       $backgroundFill,
        /**
         * Type of the sticker.
         */
        protected ChatPhotoStickerType $type,
    ) {}

    public static function fromArray(array $array): ChatPhotoSticker
    {
        return new static(
            backgroundFill: TdSchemaRegistry::fromArray($array['background_fill']),
            type          : TdSchemaRegistry::fromArray($array['type']),
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

    public function setBackgroundFill(BackgroundFill $value): static
    {
        $this->backgroundFill = $value;

        return $this;
    }

    public function setType(ChatPhotoStickerType $value): static
    {
        $this->type = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'background_fill' => $this->backgroundFill->jsonSerialize(),
            'type'            => $this->type->jsonSerialize(),
        ];
    }
}

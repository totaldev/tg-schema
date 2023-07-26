<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * Information about the sticker, which was used to create the chat photo. The sticker is shown at the center of the photo and occupies at most 67% of it
 */
class ChatPhotoSticker extends TdObject
{
    public const TYPE_NAME = 'chatPhotoSticker';

    /**
     * Type of the sticker
     *
     * @var ChatPhotoStickerType
     */
    protected ChatPhotoStickerType $type;

    /**
     * The fill to be used as background for the sticker; rotation angle in backgroundFillGradient isn't supported
     *
     * @var BackgroundFill
     */
    protected BackgroundFill $backgroundFill;

    public function __construct(ChatPhotoStickerType $type, BackgroundFill $backgroundFill)
    {
        $this->type = $type;
        $this->backgroundFill = $backgroundFill;
    }

    public static function fromArray(array $array): ChatPhotoSticker
    {
        return new static(
            TdSchemaRegistry::fromArray($array['type']),
            TdSchemaRegistry::fromArray($array['background_fill']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'type' => $this->type->typeSerialize(),
            'background_fill' => $this->backgroundFill->typeSerialize(),
        ];
    }

    public function getType(): ChatPhotoStickerType
    {
        return $this->type;
    }

    public function getBackgroundFill(): BackgroundFill
    {
        return $this->backgroundFill;
    }
}

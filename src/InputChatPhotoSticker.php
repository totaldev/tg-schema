<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * A sticker on a custom background
 */
class InputChatPhotoSticker extends InputChatPhoto
{
    public const TYPE_NAME = 'inputChatPhotoSticker';

    /**
     * Information about the sticker
     *
     * @var ChatPhotoSticker
     */
    protected ChatPhotoSticker $sticker;

    public function __construct(ChatPhotoSticker $sticker)
    {
        parent::__construct();

        $this->sticker = $sticker;
    }

    public static function fromArray(array $array): InputChatPhotoSticker
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sticker']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'sticker' => $this->sticker->typeSerialize(),
        ];
    }

    public function getSticker(): ChatPhotoSticker
    {
        return $this->sticker;
    }
}

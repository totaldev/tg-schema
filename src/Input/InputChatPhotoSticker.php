<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Chat\ChatPhotoSticker;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A sticker on a custom background.
 */
class InputChatPhotoSticker extends InputChatPhoto
{
    public const TYPE_NAME = 'inputChatPhotoSticker';

    public function __construct(
        /**
         * Information about the sticker.
         */
        protected ChatPhotoSticker $sticker
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputChatPhotoSticker
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sticker']),
        );
    }

    public function getSticker(): ChatPhotoSticker
    {
        return $this->sticker;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'sticker' => $this->sticker->typeSerialize(),
        ];
    }
}

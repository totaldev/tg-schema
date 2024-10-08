<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Mask\MaskPosition;
use Totaldev\TgSchema\Sticker\StickerFormat;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A sticker to be added to a sticker set.
 */
class InputSticker extends TdObject
{
    public const TYPE_NAME = 'inputSticker';

    public function __construct(
        /**
         * File with the sticker; must fit in a 512x512 square. For WEBP stickers the file must be in WEBP or PNG format, which will be converted to WEBP server-side. See https://core.telegram.org/animated_stickers#technical-requirements for technical requirements.
         */
        protected InputFile     $sticker,
        /**
         * Format of the sticker.
         */
        protected StickerFormat $format,
        /**
         * String with 1-20 emoji corresponding to the sticker.
         */
        protected string        $emojis,
        /**
         * Position where the mask is placed; pass null if not specified.
         */
        protected MaskPosition  $maskPosition,
        /**
         * List of up to 20 keywords with total length up to 64 characters, which can be used to find the sticker.
         *
         * @var string[]
         */
        protected array         $keywords,
    ) {}

    public static function fromArray(array $array): InputSticker
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sticker']),
            TdSchemaRegistry::fromArray($array['format']),
            $array['emojis'],
            TdSchemaRegistry::fromArray($array['mask_position']),
            $array['keywords'],
        );
    }

    public function getEmojis(): string
    {
        return $this->emojis;
    }

    public function getFormat(): StickerFormat
    {
        return $this->format;
    }

    public function getKeywords(): array
    {
        return $this->keywords;
    }

    public function getMaskPosition(): MaskPosition
    {
        return $this->maskPosition;
    }

    public function getSticker(): InputFile
    {
        return $this->sticker;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'sticker'       => $this->sticker->typeSerialize(),
            'format'        => $this->format->typeSerialize(),
            'emojis'        => $this->emojis,
            'mask_position' => $this->maskPosition->typeSerialize(),
            'keywords'      => $this->keywords,
        ];
    }
}

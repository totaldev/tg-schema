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
    public const string TYPE_NAME = 'inputSticker';

    public function __construct(
        /**
         * String with 1-20 emoji corresponding to the sticker.
         */
        protected string        $emojis,
        /**
         * Format of the sticker.
         */
        protected StickerFormat $format,
        /**
         * List of up to 20 keywords with total length up to 64 characters, which can be used to find the sticker.
         *
         * @var string[]
         */
        protected array         $keywords,
        /**
         * File with the sticker; must fit in a 512x512 square. For WEBP stickers the file must be in WEBP or PNG format, which will be converted to WEBP server-side. See https://core.telegram.org/animated_stickers#technical-requirements for technical requirements.
         */
        protected InputFile     $sticker,
        /**
         * Position where the mask is placed; pass null if not specified.
         */
        protected ?MaskPosition $maskPosition = null,
    ) {}

    public static function fromArray(array $array): InputSticker
    {
        return new static(
            emojis      : $array['emojis'],
            format      : TdSchemaRegistry::fromArray($array['format']),
            keywords    : $array['keywords'],
            maskPosition: (isset($array['mask_position']) ? TdSchemaRegistry::fromArray($array['mask_position']) : null),
            sticker     : TdSchemaRegistry::fromArray($array['sticker']),
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

    public function getMaskPosition(): ?MaskPosition
    {
        return $this->maskPosition;
    }

    public function getSticker(): InputFile
    {
        return $this->sticker;
    }

    public function setEmojis(string $value): static
    {
        $this->emojis = $value;

        return $this;
    }

    public function setFormat(StickerFormat $value): static
    {
        $this->format = $value;

        return $this;
    }

    public function setKeywords(array $value): static
    {
        $this->keywords = $value;

        return $this;
    }

    public function setMaskPosition(?MaskPosition $value): static
    {
        $this->maskPosition = $value;

        return $this;
    }

    public function setSticker(InputFile $value): static
    {
        $this->sticker = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'emojis'        => $this->emojis,
            'format'        => $this->format->jsonSerialize(),
            'keywords'      => $this->keywords,
            'mask_position' => (null !== $this->maskPosition ? $this->maskPosition->jsonSerialize() : null),
            'sticker'       => $this->sticker->jsonSerialize(),
        ];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * A sticker to be added to a sticker set
 */
class InputSticker extends TdObject
{
    public const TYPE_NAME = 'inputSticker';

    /**
     * File with the sticker; must fit in a 512x512 square. For WEBP stickers the file must be in WEBP or PNG format, which will be converted to WEBP server-side. See https://core.telegram.org/animated_stickers#technical-requirements for technical requirements
     *
     * @var InputFile
     */
    protected InputFile $sticker;

    /**
     * String with 1-20 emoji corresponding to the sticker
     *
     * @var string
     */
    protected string $emojis;

    /**
     * Position where the mask is placed; pass null if not specified
     *
     * @var MaskPosition
     */
    protected MaskPosition $maskPosition;

    /**
     * List of up to 20 keywords with total length up to 64 characters, which can be used to find the sticker
     *
     * @var string[]
     */
    protected array $keywords;

    public function __construct(InputFile $sticker, string $emojis, MaskPosition $maskPosition, array $keywords)
    {
        $this->sticker = $sticker;
        $this->emojis = $emojis;
        $this->maskPosition = $maskPosition;
        $this->keywords = $keywords;
    }

    public static function fromArray(array $array): InputSticker
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sticker']),
            $array['emojis'],
            TdSchemaRegistry::fromArray($array['mask_position']),
            $array['keywords'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'sticker' => $this->sticker->typeSerialize(),
            'emojis' => $this->emojis,
            'mask_position' => $this->maskPosition->typeSerialize(),
            'keywords' => $this->keywords,
        ];
    }

    public function getSticker(): InputFile
    {
        return $this->sticker;
    }

    public function getEmojis(): string
    {
        return $this->emojis;
    }

    public function getMaskPosition(): MaskPosition
    {
        return $this->maskPosition;
    }

    public function getKeywords(): array
    {
        return $this->keywords;
    }
}

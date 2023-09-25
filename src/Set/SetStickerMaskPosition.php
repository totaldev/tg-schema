<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Input\InputFile;
use Totaldev\TgSchema\Mask\MaskPosition;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes the mask position of a mask sticker; for bots only. The sticker must belong to a mask sticker set created by the bot
 */
class SetStickerMaskPosition extends TdFunction
{
    public const TYPE_NAME = 'setStickerMaskPosition';

    /**
     * Sticker
     *
     * @var InputFile
     */
    protected InputFile $sticker;

    /**
     * Position where the mask is placed; pass null to remove mask position
     *
     * @var MaskPosition
     */
    protected MaskPosition $maskPosition;

    public function __construct(InputFile $sticker, MaskPosition $maskPosition)
    {
        $this->sticker = $sticker;
        $this->maskPosition = $maskPosition;
    }

    public static function fromArray(array $array): SetStickerMaskPosition
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sticker']),
            TdSchemaRegistry::fromArray($array['mask_position']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'sticker' => $this->sticker->typeSerialize(),
            'mask_position' => $this->maskPosition->typeSerialize(),
        ];
    }

    public function getSticker(): InputFile
    {
        return $this->sticker;
    }

    public function getMaskPosition(): MaskPosition
    {
        return $this->maskPosition;
    }
}

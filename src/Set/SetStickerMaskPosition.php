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
 * Changes the mask position of a mask sticker. The sticker must belong to a mask sticker set that is owned by the current user.
 */
class SetStickerMaskPosition extends TdFunction
{
    public const string TYPE_NAME = 'setStickerMaskPosition';

    public function __construct(
        /**
         * Sticker.
         */
        protected InputFile     $sticker,
        /**
         * Position where the mask is placed; pass null to remove mask position.
         */
        protected ?MaskPosition $maskPosition = null,
    ) {}

    public static function fromArray(array $array): SetStickerMaskPosition
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sticker']),
            isset($array['mask_position']) ? TdSchemaRegistry::fromArray($array['mask_position']) : null,
        );
    }

    public function getMaskPosition(): ?MaskPosition
    {
        return $this->maskPosition;
    }

    public function getSticker(): InputFile
    {
        return $this->sticker;
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
            'sticker'       => $this->sticker->typeSerialize(),
            'mask_position' => $this->maskPosition ?? null,
        ];
    }
}

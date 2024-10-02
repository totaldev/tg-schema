<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Sticker;

use Totaldev\TgSchema\Mask\MaskPosition;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The sticker is a mask in WEBP format to be placed on photos or videos.
 */
class StickerFullTypeMask extends StickerFullType
{
    public const TYPE_NAME = 'stickerFullTypeMask';

    public function __construct(
        /**
         * Position where the mask is placed; may be null.
         */
        protected ?MaskPosition $maskPosition
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StickerFullTypeMask
    {
        return new static(
            isset($array['mask_position']) ? TdSchemaRegistry::fromArray($array['mask_position']) : null,
        );
    }

    public function getMaskPosition(): ?MaskPosition
    {
        return $this->maskPosition;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'mask_position' => (isset($this->maskPosition) ? $this->maskPosition : null),
        ];
    }
}

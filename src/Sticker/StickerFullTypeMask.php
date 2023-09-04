<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Sticker;

use Totaldev\TgSchema\Mask\MaskPosition;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The sticker is a mask in WEBP format to be placed on photos or videos
 */
class StickerFullTypeMask extends StickerFullType
{
    public const TYPE_NAME = 'stickerFullTypeMask';

    /**
     * Position where the mask is placed; may be null
     *
     * @var MaskPosition|null
     */
    protected ?MaskPosition $maskPosition;

    public function __construct(?MaskPosition $maskPosition)
    {
        parent::__construct();

        $this->maskPosition = $maskPosition;
    }

    public static function fromArray(array $array): StickerFullTypeMask
    {
        return new static(
            (isset($array['mask_position']) ? TdSchemaRegistry::fromArray($array['mask_position']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'mask_position' => (isset($this->maskPosition) ? $this->maskPosition : null),
        ];
    }

    public function getMaskPosition(): ?MaskPosition
    {
        return $this->maskPosition;
    }
}

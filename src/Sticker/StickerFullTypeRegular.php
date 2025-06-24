<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Sticker;

use Totaldev\TgSchema\File\File;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The sticker is a regular sticker.
 */
class StickerFullTypeRegular extends StickerFullType
{
    public const TYPE_NAME = 'stickerFullTypeRegular';

    public function __construct(
        /**
         * Premium animation of the sticker; may be null. If present, only Telegram Premium users can use the sticker.
         */
        protected ?File $premiumAnimation
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StickerFullTypeRegular
    {
        return new static(
            isset($array['premium_animation']) ? TdSchemaRegistry::fromArray($array['premium_animation']) : null,
        );
    }

    public function getPremiumAnimation(): ?File
    {
        return $this->premiumAnimation;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'premium_animation' => $this->premiumAnimation ?? null,
        ];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Link;

use Totaldev\TgSchema\Sticker\Sticker;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The link is a link to a sticker.
 */
class LinkPreviewTypeSticker extends LinkPreviewType
{
    public const TYPE_NAME = 'linkPreviewTypeSticker';

    public function __construct(
        /**
         * The sticker. It can be an arbitrary WEBP image and can have dimensions bigger than 512.
         */
        protected Sticker $sticker
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): LinkPreviewTypeSticker
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sticker']),
        );
    }

    public function getSticker(): Sticker
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

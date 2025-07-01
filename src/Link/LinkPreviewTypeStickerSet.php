<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Link;

use Totaldev\TgSchema\Sticker\Sticker;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The link is a link to a sticker set.
 */
class LinkPreviewTypeStickerSet extends LinkPreviewType
{
    public const TYPE_NAME = 'linkPreviewTypeStickerSet';

    public function __construct(
        /**
         * Up to 4 stickers from the sticker set.
         *
         * @var Sticker[]
         */
        protected array $stickers
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): LinkPreviewTypeStickerSet
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['stickers']),
        );
    }

    public function getStickers(): array
    {
        return $this->stickers;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'stickers' => array_map(static fn($x) => $x->typeSerialize(), $this->stickers),
        ];
    }
}

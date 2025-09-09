<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Sticker\StickerSet;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A sticker set has changed.
 */
class UpdateStickerSet extends Update
{
    public const TYPE_NAME = 'updateStickerSet';

    public function __construct(
        /**
         * The sticker set.
         */
        protected StickerSet $stickerSet
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateStickerSet
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sticker_set']),
        );
    }

    public function getStickerSet(): StickerSet
    {
        return $this->stickerSet;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'sticker_set' => $this->stickerSet->typeSerialize(),
        ];
    }
}

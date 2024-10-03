<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Me;

/**
 * A URL linking to a sticker set.
 */
class TMeUrlTypeStickerSet extends TMeUrlType
{
    public const TYPE_NAME = 'tMeUrlTypeStickerSet';

    public function __construct(
        /**
         * Identifier of the sticker set.
         */
        protected int $stickerSetId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): TMeUrlTypeStickerSet
    {
        return new static(
            $array['sticker_set_id'],
        );
    }

    public function getStickerSetId(): int
    {
        return $this->stickerSetId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'sticker_set_id' => $this->stickerSetId,
        ];
    }
}

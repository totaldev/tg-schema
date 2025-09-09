<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * The list of favorite stickers was updated.
 */
class UpdateFavoriteStickers extends Update
{
    public const TYPE_NAME = 'updateFavoriteStickers';

    public function __construct(
        /**
         * The new list of file identifiers of favorite stickers.
         *
         * @var int[]
         */
        protected array $stickerIds
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateFavoriteStickers
    {
        return new static(
            $array['sticker_ids'],
        );
    }

    public function getStickerIds(): array
    {
        return $this->stickerIds;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'sticker_ids' => $this->stickerIds,
        ];
    }
}

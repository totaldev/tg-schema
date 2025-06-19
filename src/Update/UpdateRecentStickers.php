<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * The list of recently used stickers was updated.
 */
class UpdateRecentStickers extends Update
{
    public const TYPE_NAME = 'updateRecentStickers';

    public function __construct(
        /**
         * True, if the list of stickers attached to photo or video files was updated; otherwise, the list of sent stickers is updated.
         */
        protected bool  $isAttached,
        /**
         * The new list of file identifiers of recently used stickers.
         *
         * @var int[]
         */
        protected array $stickerIds
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateRecentStickers
    {
        return new static(
            $array['is_attached'],
            $array['sticker_ids'],
        );
    }

    public function getIsAttached(): bool
    {
        return $this->isAttached;
    }

    public function getStickerIds(): array
    {
        return $this->stickerIds;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'is_attached' => $this->isAttached,
            'sticker_ids' => $this->stickerIds,
        ];
    }
}

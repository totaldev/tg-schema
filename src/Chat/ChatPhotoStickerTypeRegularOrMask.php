<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * Information about the sticker, which was used to create the chat photo.
 */
class ChatPhotoStickerTypeRegularOrMask extends ChatPhotoStickerType
{
    public const TYPE_NAME = 'chatPhotoStickerTypeRegularOrMask';

    public function __construct(
        /**
         * Sticker set identifier.
         */
        protected int $stickerSetId,
        /**
         * Identifier of the sticker in the set.
         */
        protected int $stickerId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatPhotoStickerTypeRegularOrMask
    {
        return new static(
            $array['sticker_set_id'],
            $array['sticker_id'],
        );
    }

    public function getStickerId(): int
    {
        return $this->stickerId;
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
            'sticker_id'     => $this->stickerId,
        ];
    }
}

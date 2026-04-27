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
    public const string TYPE_NAME = 'chatPhotoStickerTypeRegularOrMask';

    public function __construct(
        /**
         * Identifier of the sticker in the set.
         */
        protected int $stickerId,
        /**
         * Sticker set identifier.
         */
        protected int $stickerSetId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatPhotoStickerTypeRegularOrMask
    {
        return new static(
            stickerId   : $array['sticker_id'],
            stickerSetId: $array['sticker_set_id'],
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

    public function setStickerId(int $value): static
    {
        $this->stickerId = $value;

        return $this;
    }

    public function setStickerSetId(int $value): static
    {
        $this->stickerSetId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'sticker_id'     => $this->stickerId,
            'sticker_set_id' => $this->stickerSetId,
        ];
    }
}

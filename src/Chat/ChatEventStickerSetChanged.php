<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * The supergroup sticker set was changed.
 */
class ChatEventStickerSetChanged extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventStickerSetChanged';

    public function __construct(
        /**
         * Previous identifier of the chat sticker set; 0 if none.
         */
        protected int $oldStickerSetId,
        /**
         * New identifier of the chat sticker set; 0 if none.
         */
        protected int $newStickerSetId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventStickerSetChanged
    {
        return new static(
            $array['old_sticker_set_id'],
            $array['new_sticker_set_id'],
        );
    }

    public function getNewStickerSetId(): int
    {
        return $this->newStickerSetId;
    }

    public function getOldStickerSetId(): int
    {
        return $this->oldStickerSetId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'old_sticker_set_id' => $this->oldStickerSetId,
            'new_sticker_set_id' => $this->newStickerSetId,
        ];
    }
}

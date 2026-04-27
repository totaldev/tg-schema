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
    public const string TYPE_NAME = 'chatEventStickerSetChanged';

    public function __construct(
        /**
         * New identifier of the chat sticker set; 0 if none.
         */
        protected int $newStickerSetId,
        /**
         * Previous identifier of the chat sticker set; 0 if none.
         */
        protected int $oldStickerSetId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventStickerSetChanged
    {
        return new static(
            newStickerSetId: $array['new_sticker_set_id'],
            oldStickerSetId: $array['old_sticker_set_id'],
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

    public function setNewStickerSetId(int $value): static
    {
        $this->newStickerSetId = $value;

        return $this;
    }

    public function setOldStickerSetId(int $value): static
    {
        $this->oldStickerSetId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'new_sticker_set_id' => $this->newStickerSetId,
            'old_sticker_set_id' => $this->oldStickerSetId,
        ];
    }
}

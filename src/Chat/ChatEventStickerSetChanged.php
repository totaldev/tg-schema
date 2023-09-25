<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The supergroup sticker set was changed
 */
class ChatEventStickerSetChanged extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventStickerSetChanged';

    /**
     * New identifier of the chat sticker set; 0 if none
     *
     * @var int
     */
    protected int $newStickerSetId;

    /**
     * Previous identifier of the chat sticker set; 0 if none
     *
     * @var int
     */
    protected int $oldStickerSetId;

    public function __construct(int $oldStickerSetId, int $newStickerSetId)
    {
        parent::__construct();

        $this->oldStickerSetId = $oldStickerSetId;
        $this->newStickerSetId = $newStickerSetId;
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
            '@type' => static::TYPE_NAME,
            'old_sticker_set_id' => $this->oldStickerSetId,
            'new_sticker_set_id' => $this->newStickerSetId,
        ];
    }
}

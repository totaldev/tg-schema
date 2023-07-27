<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Chat;

/**
 * Information about the sticker, which was used to create the chat photo
 */
class ChatPhotoStickerTypeRegularOrMask extends ChatPhotoStickerType
{
    public const TYPE_NAME = 'chatPhotoStickerTypeRegularOrMask';

    /**
     * Sticker set identifier
     *
     * @var int
     */
    protected int $stickerSetId;

    /**
     * Identifier of the sticker in the set
     *
     * @var int
     */
    protected int $stickerId;

    public function __construct(int $stickerSetId, int $stickerId)
    {
        parent::__construct();

        $this->stickerSetId = $stickerSetId;
        $this->stickerId = $stickerId;
    }

    public static function fromArray(array $array): ChatPhotoStickerTypeRegularOrMask
    {
        return new static(
            $array['sticker_set_id'],
            $array['sticker_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'sticker_set_id' => $this->stickerSetId,
            'sticker_id' => $this->stickerId,
        ];
    }

    public function getStickerSetId(): int
    {
        return $this->stickerSetId;
    }

    public function getStickerId(): int
    {
        return $this->stickerId;
    }
}

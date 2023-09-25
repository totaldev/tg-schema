<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Sticker;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The sticker is a custom emoji to be used inside message text and caption. Currently, only Telegram Premium users can use custom emoji
 */
class StickerFullTypeCustomEmoji extends StickerFullType
{
    public const TYPE_NAME = 'stickerFullTypeCustomEmoji';

    /**
     * Identifier of the custom emoji
     *
     * @var int
     */
    protected int $customEmojiId;

    /**
     * True, if the sticker must be repainted to a text color in messages, the color of the Telegram Premium badge in emoji status, white color on chat photos,
     * or another appropriate color in other places
     *
     * @var bool
     */
    protected bool $needsRepainting;

    public function __construct(int $customEmojiId, bool $needsRepainting)
    {
        parent::__construct();

        $this->customEmojiId = $customEmojiId;
        $this->needsRepainting = $needsRepainting;
    }

    public static function fromArray(array $array): StickerFullTypeCustomEmoji
    {
        return new static(
            $array['custom_emoji_id'],
            $array['needs_repainting'],
        );
    }

    public function getCustomEmojiId(): int
    {
        return $this->customEmojiId;
    }

    public function getNeedsRepainting(): bool
    {
        return $this->needsRepainting;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'custom_emoji_id' => $this->customEmojiId,
            'needs_repainting' => $this->needsRepainting,
        ];
    }
}

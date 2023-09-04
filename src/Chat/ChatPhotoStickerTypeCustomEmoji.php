<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Information about the custom emoji, which was used to create the chat photo
 */
class ChatPhotoStickerTypeCustomEmoji extends ChatPhotoStickerType
{
    public const TYPE_NAME = 'chatPhotoStickerTypeCustomEmoji';

    /**
     * Identifier of the custom emoji
     *
     * @var int
     */
    protected int $customEmojiId;

    public function __construct(int $customEmojiId)
    {
        parent::__construct();

        $this->customEmojiId = $customEmojiId;
    }

    public static function fromArray(array $array): ChatPhotoStickerTypeCustomEmoji
    {
        return new static(
            $array['custom_emoji_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'custom_emoji_id' => $this->customEmojiId,
        ];
    }

    public function getCustomEmojiId(): int
    {
        return $this->customEmojiId;
    }
}

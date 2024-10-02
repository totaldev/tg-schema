<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * Information about the custom emoji, which was used to create the chat photo.
 */
class ChatPhotoStickerTypeCustomEmoji extends ChatPhotoStickerType
{
    public const TYPE_NAME = 'chatPhotoStickerTypeCustomEmoji';

    public function __construct(
        /**
         * Identifier of the custom emoji.
         */
        protected int $customEmojiId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatPhotoStickerTypeCustomEmoji
    {
        return new static(
            $array['custom_emoji_id'],
        );
    }

    public function getCustomEmojiId(): int
    {
        return $this->customEmojiId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'custom_emoji_id' => $this->customEmojiId,
        ];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Emoji;

/**
 * A custom emoji set as emoji status.
 */
class EmojiStatusTypeCustomEmoji extends EmojiStatusType
{
    public const TYPE_NAME = 'emojiStatusTypeCustomEmoji';

    public function __construct(
        /**
         * Identifier of the custom emoji in stickerFormatTgs format.
         */
        protected int $customEmojiId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): EmojiStatusTypeCustomEmoji
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

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Text;

/**
 * A custom emoji. The text behind a custom emoji must be an emoji. Only premium users can use premium custom emoji.
 */
class TextEntityTypeCustomEmoji extends TextEntityType
{
    public const string TYPE_NAME = 'textEntityTypeCustomEmoji';

    public function __construct(
        /**
         * Unique identifier of the custom emoji.
         */
        protected int $customEmojiId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): TextEntityTypeCustomEmoji
    {
        return new static(
            customEmojiId: $array['custom_emoji_id'],
        );
    }

    public function getCustomEmojiId(): int
    {
        return $this->customEmojiId;
    }

    public function setCustomEmojiId(int $value): static
    {
        $this->customEmojiId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'custom_emoji_id' => $this->customEmojiId,
        ];
    }
}

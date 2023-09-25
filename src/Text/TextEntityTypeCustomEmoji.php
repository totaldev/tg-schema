<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Text;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A custom emoji. The text behind a custom emoji must be an emoji. Only premium users can use premium custom emoji
 */
class TextEntityTypeCustomEmoji extends TextEntityType
{
    public const TYPE_NAME = 'textEntityTypeCustomEmoji';

    /**
     * Unique identifier of the custom emoji
     *
     * @var int
     */
    protected int $customEmojiId;

    public function __construct(int $customEmojiId)
    {
        parent::__construct();

        $this->customEmojiId = $customEmojiId;
    }

    public static function fromArray(array $array): TextEntityTypeCustomEmoji
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
            '@type' => static::TYPE_NAME,
            'custom_emoji_id' => $this->customEmojiId,
        ];
    }
}

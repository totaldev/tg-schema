<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Emoji;

use Totaldev\TgSchema\TdObject;

/**
 * Represents an emoji with its keyword.
 */
class EmojiKeyword extends TdObject
{
    public const string TYPE_NAME = 'emojiKeyword';

    public function __construct(
        /**
         * The emoji.
         */
        protected string $emoji,
        /**
         * The keyword.
         */
        protected string $keyword,
    ) {}

    public static function fromArray(array $array): EmojiKeyword
    {
        return new static(
            emoji  : $array['emoji'],
            keyword: $array['keyword'],
        );
    }

    public function getEmoji(): string
    {
        return $this->emoji;
    }

    public function getKeyword(): string
    {
        return $this->keyword;
    }

    public function setEmoji(string $value): static
    {
        $this->emoji = $value;

        return $this;
    }

    public function setKeyword(string $value): static
    {
        $this->keyword = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'emoji'   => $this->emoji,
            'keyword' => $this->keyword,
        ];
    }
}

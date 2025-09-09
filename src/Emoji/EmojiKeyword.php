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
    public const TYPE_NAME = 'emojiKeyword';

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
            $array['emoji'],
            $array['keyword'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'emoji'   => $this->emoji,
            'keyword' => $this->keyword,
        ];
    }
}

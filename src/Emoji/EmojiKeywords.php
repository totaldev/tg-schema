<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Emoji;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a list of emojis with their keywords.
 */
class EmojiKeywords extends TdObject
{
    public const TYPE_NAME = 'emojiKeywords';

    public function __construct(
        /**
         * List of emojis with their keywords.
         *
         * @var EmojiKeyword[]
         */
        protected array $emojiKeywords
    ) {}

    public static function fromArray(array $array): EmojiKeywords
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['emoji_keywords']),
        );
    }

    public function getEmojiKeywords(): array
    {
        return $this->emojiKeywords;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->emojiKeywords),
        ];
    }
}

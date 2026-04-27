<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Text;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a style that can be used to compose a text.
 */
class TextCompositionStyle extends TdObject
{
    public const string TYPE_NAME = 'textCompositionStyle';

    public function __construct(
        /**
         * Identifier of the custom emoji corresponding to the style.
         */
        protected int    $customEmojiId,
        /**
         * Name of the style.
         */
        protected string $name,
        /**
         * Title of the style in the user application's language.
         */
        protected string $title,
    ) {}

    public static function fromArray(array $array): TextCompositionStyle
    {
        return new static(
            customEmojiId: $array['custom_emoji_id'],
            name         : $array['name'],
            title        : $array['title'],
        );
    }

    public function getCustomEmojiId(): int
    {
        return $this->customEmojiId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setCustomEmojiId(int $value): static
    {
        $this->customEmojiId = $value;

        return $this;
    }

    public function setName(string $value): static
    {
        $this->name = $value;

        return $this;
    }

    public function setTitle(string $value): static
    {
        $this->title = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'custom_emoji_id' => $this->customEmojiId,
            'name'            => $this->name,
            'title'           => $this->title,
        ];
    }
}

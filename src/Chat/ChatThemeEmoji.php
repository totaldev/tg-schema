<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * A chat theme based on an emoji.
 */
class ChatThemeEmoji extends ChatTheme
{
    public const string TYPE_NAME = 'chatThemeEmoji';

    public function __construct(
        /**
         * Name of the theme; full theme description is received through updateEmojiChatThemes.
         */
        protected string $name
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatThemeEmoji
    {
        return new static(
            name: $array['name'],
        );
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $value): static
    {
        $this->name = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'name'  => $this->name,
        ];
    }
}

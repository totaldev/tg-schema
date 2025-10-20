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
    public const TYPE_NAME = 'chatThemeEmoji';

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
            $array['name'],
        );
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'name'  => $this->name,
        ];
    }
}

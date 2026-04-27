<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Emoji\EmojiChatTheme;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The list of available emoji chat themes has changed.
 */
class UpdateEmojiChatThemes extends Update
{
    public const string TYPE_NAME = 'updateEmojiChatThemes';

    public function __construct(
        /**
         * The new list of emoji chat themes.
         *
         * @var EmojiChatTheme[]
         */
        protected array $chatThemes
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateEmojiChatThemes
    {
        return new static(
            chatThemes: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['chat_themes']),
        );
    }

    public function getChatThemes(): array
    {
        return $this->chatThemes;
    }

    public function setChatThemes(array $value): static
    {
        $this->chatThemes = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'chat_themes' => array_map(static fn($x) => $x->jsonSerialize(), $this->chatThemes),
        ];
    }
}

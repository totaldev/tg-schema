<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes accent color and background custom emoji for the current user; for Telegram Premium users only.
 */
class SetAccentColor extends TdFunction
{
    public const string TYPE_NAME = 'setAccentColor';

    public function __construct(
        /**
         * Identifier of the accent color to use.
         */
        protected int $accentColorId,
        /**
         * Identifier of a custom emoji to be shown on the reply header and link preview background; 0 if none.
         */
        protected int $backgroundCustomEmojiId,
    ) {}

    public static function fromArray(array $array): SetAccentColor
    {
        return new static(
            accentColorId          : $array['accent_color_id'],
            backgroundCustomEmojiId: $array['background_custom_emoji_id'],
        );
    }

    public function getAccentColorId(): int
    {
        return $this->accentColorId;
    }

    public function getBackgroundCustomEmojiId(): int
    {
        return $this->backgroundCustomEmojiId;
    }

    public function setAccentColorId(int $value): static
    {
        $this->accentColorId = $value;

        return $this;
    }

    public function setBackgroundCustomEmojiId(int $value): static
    {
        $this->backgroundCustomEmojiId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                      => static::TYPE_NAME,
            'accent_color_id'            => $this->accentColorId,
            'background_custom_emoji_id' => $this->backgroundCustomEmojiId,
        ];
    }
}

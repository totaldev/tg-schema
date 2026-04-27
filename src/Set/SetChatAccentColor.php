<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes accent color and background custom emoji of a channel chat. Requires can_change_info administrator right.
 */
class SetChatAccentColor extends TdFunction
{
    public const string TYPE_NAME = 'setChatAccentColor';

    public function __construct(
        /**
         * Identifier of the accent color to use. The chat must have at least accentColor.min_channel_chat_boost_level boost level to pass the corresponding color.
         */
        protected int $accentColorId,
        /**
         * Identifier of a custom emoji to be shown on the reply header and link preview background; 0 if none. Use chatBoostLevelFeatures.can_set_background_custom_emoji to check whether a custom emoji can be set.
         */
        protected int $backgroundCustomEmojiId,
        /**
         * Chat identifier.
         */
        protected int $chatId,
    ) {}

    public static function fromArray(array $array): SetChatAccentColor
    {
        return new static(
            accentColorId          : $array['accent_color_id'],
            backgroundCustomEmojiId: $array['background_custom_emoji_id'],
            chatId                 : $array['chat_id'],
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

    public function getChatId(): int
    {
        return $this->chatId;
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

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                      => static::TYPE_NAME,
            'accent_color_id'            => $this->accentColorId,
            'background_custom_emoji_id' => $this->backgroundCustomEmojiId,
            'chat_id'                    => $this->chatId,
        ];
    }
}

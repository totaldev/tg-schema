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
    public const TYPE_NAME = 'setChatAccentColor';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int $chatId,
        /**
         * Identifier of the accent color to use. The chat must have at least accentColor.min_channel_chat_boost_level boost level to pass the corresponding color.
         */
        protected int $accentColorId,
        /**
         * Identifier of a custom emoji to be shown on the reply header and link preview background; 0 if none. Use chatBoostLevelFeatures.can_set_background_custom_emoji to check whether a custom emoji can be set.
         */
        protected int $backgroundCustomEmojiId
    ) {}

    public static function fromArray(array $array): SetChatAccentColor
    {
        return new static(
            $array['chat_id'],
            $array['accent_color_id'],
            $array['background_custom_emoji_id'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'                      => static::TYPE_NAME,
            'chat_id'                    => $this->chatId,
            'accent_color_id'            => $this->accentColorId,
            'background_custom_emoji_id' => $this->backgroundCustomEmojiId,
        ];
    }
}

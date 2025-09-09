<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes accent color and background custom emoji for profile of a supergroup or channel chat. Requires can_change_info administrator right.
 */
class SetChatProfileAccentColor extends TdFunction
{
    public const TYPE_NAME = 'setChatProfileAccentColor';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int $chatId,
        /**
         * Identifier of the accent color to use for profile; pass -1 if none. The chat must have at least profileAccentColor.min_supergroup_chat_boost_level for supergroups or profileAccentColor.min_channel_chat_boost_level for channels boost level to pass the corresponding color.
         */
        protected int $profileAccentColorId,
        /**
         * Identifier of a custom emoji to be shown on the chat's profile photo background; 0 if none. Use chatBoostLevelFeatures.can_set_profile_background_custom_emoji to check whether a custom emoji can be set.
         */
        protected int $profileBackgroundCustomEmojiId,
    ) {}

    public static function fromArray(array $array): SetChatProfileAccentColor
    {
        return new static(
            $array['chat_id'],
            $array['profile_accent_color_id'],
            $array['profile_background_custom_emoji_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getProfileAccentColorId(): int
    {
        return $this->profileAccentColorId;
    }

    public function getProfileBackgroundCustomEmojiId(): int
    {
        return $this->profileBackgroundCustomEmojiId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                              => static::TYPE_NAME,
            'chat_id'                            => $this->chatId,
            'profile_accent_color_id'            => $this->profileAccentColorId,
            'profile_background_custom_emoji_id' => $this->profileBackgroundCustomEmojiId,
        ];
    }
}

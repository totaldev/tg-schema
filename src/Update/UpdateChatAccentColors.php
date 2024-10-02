<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * Chat accent colors have changed.
 */
class UpdateChatAccentColors extends Update
{
    public const TYPE_NAME = 'updateChatAccentColors';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int $chatId,
        /**
         * The new chat accent color identifier.
         */
        protected int $accentColorId,
        /**
         * The new identifier of a custom emoji to be shown on the reply header and link preview background; 0 if none.
         */
        protected int $backgroundCustomEmojiId,
        /**
         * The new chat profile accent color identifier; -1 if none.
         */
        protected int $profileAccentColorId,
        /**
         * The new identifier of a custom emoji to be shown on the profile background; 0 if none.
         */
        protected int $profileBackgroundCustomEmojiId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatAccentColors
    {
        return new static(
            $array['chat_id'],
            $array['accent_color_id'],
            $array['background_custom_emoji_id'],
            $array['profile_accent_color_id'],
            $array['profile_background_custom_emoji_id'],
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
            'accent_color_id'                    => $this->accentColorId,
            'background_custom_emoji_id'         => $this->backgroundCustomEmojiId,
            'profile_accent_color_id'            => $this->profileAccentColorId,
            'profile_background_custom_emoji_id' => $this->profileBackgroundCustomEmojiId,
        ];
    }
}

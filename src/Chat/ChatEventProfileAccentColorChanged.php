<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * The chat's profile accent color or profile background custom emoji were changed.
 */
class ChatEventProfileAccentColorChanged extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventProfileAccentColorChanged';

    public function __construct(
        /**
         * Previous identifier of chat's profile accent color; -1 if none.
         */
        protected int $oldProfileAccentColorId,
        /**
         * Previous identifier of the custom emoji; 0 if none.
         */
        protected int $oldProfileBackgroundCustomEmojiId,
        /**
         * New identifier of chat's profile accent color; -1 if none.
         */
        protected int $newProfileAccentColorId,
        /**
         * New identifier of the custom emoji; 0 if none.
         */
        protected int $newProfileBackgroundCustomEmojiId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventProfileAccentColorChanged
    {
        return new static(
            $array['old_profile_accent_color_id'],
            $array['old_profile_background_custom_emoji_id'],
            $array['new_profile_accent_color_id'],
            $array['new_profile_background_custom_emoji_id'],
        );
    }

    public function getNewProfileAccentColorId(): int
    {
        return $this->newProfileAccentColorId;
    }

    public function getNewProfileBackgroundCustomEmojiId(): int
    {
        return $this->newProfileBackgroundCustomEmojiId;
    }

    public function getOldProfileAccentColorId(): int
    {
        return $this->oldProfileAccentColorId;
    }

    public function getOldProfileBackgroundCustomEmojiId(): int
    {
        return $this->oldProfileBackgroundCustomEmojiId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                                  => static::TYPE_NAME,
            'old_profile_accent_color_id'            => $this->oldProfileAccentColorId,
            'old_profile_background_custom_emoji_id' => $this->oldProfileBackgroundCustomEmojiId,
            'new_profile_accent_color_id'            => $this->newProfileAccentColorId,
            'new_profile_background_custom_emoji_id' => $this->newProfileBackgroundCustomEmojiId,
        ];
    }
}

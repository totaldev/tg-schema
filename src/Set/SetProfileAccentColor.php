<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes accent color and background custom emoji for profile of the current user; for Telegram Premium users only.
 */
class SetProfileAccentColor extends TdFunction
{
    public const TYPE_NAME = 'setProfileAccentColor';

    public function __construct(
        /**
         * Identifier of the accent color to use for profile; pass -1 if none.
         */
        protected int $profileAccentColorId,
        /**
         * Identifier of a custom emoji to be shown on the user's profile photo background; 0 if none.
         */
        protected int $profileBackgroundCustomEmojiId,
    ) {}

    public static function fromArray(array $array): SetProfileAccentColor
    {
        return new static(
            $array['profile_accent_color_id'],
            $array['profile_background_custom_emoji_id'],
        );
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
            'profile_accent_color_id'            => $this->profileAccentColorId,
            'profile_background_custom_emoji_id' => $this->profileBackgroundCustomEmojiId,
        ];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;

/**
 * Contains a list of features available on a specific chat boost level.
 */
class ChatBoostLevelFeatures extends TdObject
{
    public const TYPE_NAME = 'chatBoostLevelFeatures';

    public function __construct(
        /**
         * Target chat boost level.
         */
        protected int  $level,
        /**
         * Number of stories that the chat can publish daily.
         */
        protected int  $storyPerDayCount,
        /**
         * Number of custom emoji reactions that can be added to the list of available reactions.
         */
        protected int  $customEmojiReactionCount,
        /**
         * Number of custom colors for chat title.
         */
        protected int  $titleColorCount,
        /**
         * Number of custom colors for profile photo background.
         */
        protected int  $profileAccentColorCount,
        /**
         * True, if custom emoji for profile background can be set.
         */
        protected bool $canSetProfileBackgroundCustomEmoji,
        /**
         * Number of custom colors for background of empty chat photo, replies to messages and link previews.
         */
        protected int  $accentColorCount,
        /**
         * True, if custom emoji for reply header and link preview background can be set.
         */
        protected bool $canSetBackgroundCustomEmoji,
        /**
         * True, if emoji status can be set.
         */
        protected bool $canSetEmojiStatus,
        /**
         * Number of chat theme backgrounds that can be set as chat background.
         */
        protected int  $chatThemeBackgroundCount,
        /**
         * True, if custom background can be set in the chat for all users.
         */
        protected bool $canSetCustomBackground,
        /**
         * True, if custom emoji sticker set can be set for the chat.
         */
        protected bool $canSetCustomEmojiStickerSet,
        /**
         * True, if automatic translation of messages can be enabled in the chat.
         */
        protected bool $canEnableAutomaticTranslation,
        /**
         * True, if speech recognition can be used for video note and voice note messages by all users.
         */
        protected bool $canRecognizeSpeech,
        /**
         * True, if sponsored messages can be disabled in the chat.
         */
        protected bool $canDisableSponsoredMessages,
    ) {}

    public static function fromArray(array $array): ChatBoostLevelFeatures
    {
        return new static(
            $array['level'],
            $array['story_per_day_count'],
            $array['custom_emoji_reaction_count'],
            $array['title_color_count'],
            $array['profile_accent_color_count'],
            $array['can_set_profile_background_custom_emoji'],
            $array['accent_color_count'],
            $array['can_set_background_custom_emoji'],
            $array['can_set_emoji_status'],
            $array['chat_theme_background_count'],
            $array['can_set_custom_background'],
            $array['can_set_custom_emoji_sticker_set'],
            $array['can_enable_automatic_translation'],
            $array['can_recognize_speech'],
            $array['can_disable_sponsored_messages'],
        );
    }

    public function getAccentColorCount(): int
    {
        return $this->accentColorCount;
    }

    public function getCanDisableSponsoredMessages(): bool
    {
        return $this->canDisableSponsoredMessages;
    }

    public function getCanEnableAutomaticTranslation(): bool
    {
        return $this->canEnableAutomaticTranslation;
    }

    public function getCanRecognizeSpeech(): bool
    {
        return $this->canRecognizeSpeech;
    }

    public function getCanSetBackgroundCustomEmoji(): bool
    {
        return $this->canSetBackgroundCustomEmoji;
    }

    public function getCanSetCustomBackground(): bool
    {
        return $this->canSetCustomBackground;
    }

    public function getCanSetCustomEmojiStickerSet(): bool
    {
        return $this->canSetCustomEmojiStickerSet;
    }

    public function getCanSetEmojiStatus(): bool
    {
        return $this->canSetEmojiStatus;
    }

    public function getCanSetProfileBackgroundCustomEmoji(): bool
    {
        return $this->canSetProfileBackgroundCustomEmoji;
    }

    public function getChatThemeBackgroundCount(): int
    {
        return $this->chatThemeBackgroundCount;
    }

    public function getCustomEmojiReactionCount(): int
    {
        return $this->customEmojiReactionCount;
    }

    public function getLevel(): int
    {
        return $this->level;
    }

    public function getProfileAccentColorCount(): int
    {
        return $this->profileAccentColorCount;
    }

    public function getStoryPerDayCount(): int
    {
        return $this->storyPerDayCount;
    }

    public function getTitleColorCount(): int
    {
        return $this->titleColorCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                                   => static::TYPE_NAME,
            'level'                                   => $this->level,
            'story_per_day_count'                     => $this->storyPerDayCount,
            'custom_emoji_reaction_count'             => $this->customEmojiReactionCount,
            'title_color_count'                       => $this->titleColorCount,
            'profile_accent_color_count'              => $this->profileAccentColorCount,
            'can_set_profile_background_custom_emoji' => $this->canSetProfileBackgroundCustomEmoji,
            'accent_color_count'                      => $this->accentColorCount,
            'can_set_background_custom_emoji'         => $this->canSetBackgroundCustomEmoji,
            'can_set_emoji_status'                    => $this->canSetEmojiStatus,
            'chat_theme_background_count'             => $this->chatThemeBackgroundCount,
            'can_set_custom_background'               => $this->canSetCustomBackground,
            'can_set_custom_emoji_sticker_set'        => $this->canSetCustomEmojiStickerSet,
            'can_enable_automatic_translation'        => $this->canEnableAutomaticTranslation,
            'can_recognize_speech'                    => $this->canRecognizeSpeech,
            'can_disable_sponsored_messages'          => $this->canDisableSponsoredMessages,
        ];
    }
}

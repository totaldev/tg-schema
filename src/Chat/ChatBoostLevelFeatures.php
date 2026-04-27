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
    public const string TYPE_NAME = 'chatBoostLevelFeatures';

    public function __construct(
        /**
         * Number of custom colors for background of empty chat photo, replies to messages and link previews.
         */
        protected int  $accentColorCount,
        /**
         * True, if sponsored messages can be disabled in the chat.
         */
        protected bool $canDisableSponsoredMessages,
        /**
         * True, if automatic translation of messages can be enabled in the chat.
         */
        protected bool $canEnableAutomaticTranslation,
        /**
         * True, if speech recognition can be used for video note and voice note messages by all users.
         */
        protected bool $canRecognizeSpeech,
        /**
         * True, if custom emoji for reply header and link preview background can be set.
         */
        protected bool $canSetBackgroundCustomEmoji,
        /**
         * True, if custom background can be set in the chat for all users.
         */
        protected bool $canSetCustomBackground,
        /**
         * True, if custom emoji sticker set can be set for the chat.
         */
        protected bool $canSetCustomEmojiStickerSet,
        /**
         * True, if emoji status can be set.
         */
        protected bool $canSetEmojiStatus,
        /**
         * True, if custom emoji for profile background can be set.
         */
        protected bool $canSetProfileBackgroundCustomEmoji,
        /**
         * Number of chat theme backgrounds that can be set as chat background.
         */
        protected int  $chatThemeBackgroundCount,
        /**
         * Number of custom emoji reactions that can be added to the list of available reactions.
         */
        protected int  $customEmojiReactionCount,
        /**
         * Target chat boost level.
         */
        protected int  $level,
        /**
         * Number of custom colors for profile photo background.
         */
        protected int  $profileAccentColorCount,
        /**
         * Number of stories that the chat can publish daily.
         */
        protected int  $storyPerDayCount,
        /**
         * Number of custom colors for chat title.
         */
        protected int  $titleColorCount,
    ) {}

    public static function fromArray(array $array): ChatBoostLevelFeatures
    {
        return new static(
            accentColorCount                  : $array['accent_color_count'],
            canDisableSponsoredMessages       : $array['can_disable_sponsored_messages'],
            canEnableAutomaticTranslation     : $array['can_enable_automatic_translation'],
            canRecognizeSpeech                : $array['can_recognize_speech'],
            canSetBackgroundCustomEmoji       : $array['can_set_background_custom_emoji'],
            canSetCustomBackground            : $array['can_set_custom_background'],
            canSetCustomEmojiStickerSet       : $array['can_set_custom_emoji_sticker_set'],
            canSetEmojiStatus                 : $array['can_set_emoji_status'],
            canSetProfileBackgroundCustomEmoji: $array['can_set_profile_background_custom_emoji'],
            chatThemeBackgroundCount          : $array['chat_theme_background_count'],
            customEmojiReactionCount          : $array['custom_emoji_reaction_count'],
            level                             : $array['level'],
            profileAccentColorCount           : $array['profile_accent_color_count'],
            storyPerDayCount                  : $array['story_per_day_count'],
            titleColorCount                   : $array['title_color_count'],
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

    public function setAccentColorCount(int $value): static
    {
        $this->accentColorCount = $value;

        return $this;
    }

    public function setCanDisableSponsoredMessages(bool $value): static
    {
        $this->canDisableSponsoredMessages = $value;

        return $this;
    }

    public function setCanEnableAutomaticTranslation(bool $value): static
    {
        $this->canEnableAutomaticTranslation = $value;

        return $this;
    }

    public function setCanRecognizeSpeech(bool $value): static
    {
        $this->canRecognizeSpeech = $value;

        return $this;
    }

    public function setCanSetBackgroundCustomEmoji(bool $value): static
    {
        $this->canSetBackgroundCustomEmoji = $value;

        return $this;
    }

    public function setCanSetCustomBackground(bool $value): static
    {
        $this->canSetCustomBackground = $value;

        return $this;
    }

    public function setCanSetCustomEmojiStickerSet(bool $value): static
    {
        $this->canSetCustomEmojiStickerSet = $value;

        return $this;
    }

    public function setCanSetEmojiStatus(bool $value): static
    {
        $this->canSetEmojiStatus = $value;

        return $this;
    }

    public function setCanSetProfileBackgroundCustomEmoji(bool $value): static
    {
        $this->canSetProfileBackgroundCustomEmoji = $value;

        return $this;
    }

    public function setChatThemeBackgroundCount(int $value): static
    {
        $this->chatThemeBackgroundCount = $value;

        return $this;
    }

    public function setCustomEmojiReactionCount(int $value): static
    {
        $this->customEmojiReactionCount = $value;

        return $this;
    }

    public function setLevel(int $value): static
    {
        $this->level = $value;

        return $this;
    }

    public function setProfileAccentColorCount(int $value): static
    {
        $this->profileAccentColorCount = $value;

        return $this;
    }

    public function setStoryPerDayCount(int $value): static
    {
        $this->storyPerDayCount = $value;

        return $this;
    }

    public function setTitleColorCount(int $value): static
    {
        $this->titleColorCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                                   => static::TYPE_NAME,
            'accent_color_count'                      => $this->accentColorCount,
            'can_disable_sponsored_messages'          => $this->canDisableSponsoredMessages,
            'can_enable_automatic_translation'        => $this->canEnableAutomaticTranslation,
            'can_recognize_speech'                    => $this->canRecognizeSpeech,
            'can_set_background_custom_emoji'         => $this->canSetBackgroundCustomEmoji,
            'can_set_custom_background'               => $this->canSetCustomBackground,
            'can_set_custom_emoji_sticker_set'        => $this->canSetCustomEmojiStickerSet,
            'can_set_emoji_status'                    => $this->canSetEmojiStatus,
            'can_set_profile_background_custom_emoji' => $this->canSetProfileBackgroundCustomEmoji,
            'chat_theme_background_count'             => $this->chatThemeBackgroundCount,
            'custom_emoji_reaction_count'             => $this->customEmojiReactionCount,
            'level'                                   => $this->level,
            'profile_accent_color_count'              => $this->profileAccentColorCount,
            'story_per_day_count'                     => $this->storyPerDayCount,
            'title_color_count'                       => $this->titleColorCount,
        ];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of features available on the first chat boost levels.
 */
class ChatBoostFeatures extends TdObject
{
    public const TYPE_NAME = 'chatBoostFeatures';

    public function __construct(
        /**
         * The list of features.
         *
         * @var ChatBoostLevelFeatures[]
         */
        protected array $features,
        /**
         * The minimum boost level required to set custom emoji for profile background.
         */
        protected int   $minProfileBackgroundCustomEmojiBoostLevel,
        /**
         * The minimum boost level required to set custom emoji for reply header and link preview background; for channel chats only.
         */
        protected int   $minBackgroundCustomEmojiBoostLevel,
        /**
         * The minimum boost level required to set emoji status.
         */
        protected int   $minEmojiStatusBoostLevel,
        /**
         * The minimum boost level required to set a chat theme background as chat background.
         */
        protected int   $minChatThemeBackgroundBoostLevel,
        /**
         * The minimum boost level required to set custom chat background.
         */
        protected int   $minCustomBackgroundBoostLevel,
        /**
         * The minimum boost level required to set custom emoji sticker set for the chat; for supergroup chats only.
         */
        protected int   $minCustomEmojiStickerSetBoostLevel,
        /**
         * The minimum boost level allowing to enable automatic translation of messages for non-Premium users; for channel chats only.
         */
        protected int   $minAutomaticTranslationBoostLevel,
        /**
         * The minimum boost level allowing to recognize speech in video note and voice note messages for non-Premium users; for supergroup chats only.
         */
        protected int   $minSpeechRecognitionBoostLevel,
        /**
         * The minimum boost level allowing to disable sponsored messages in the chat; for channel chats only.
         */
        protected int   $minSponsoredMessageDisableBoostLevel,
    ) {}

    public static function fromArray(array $array): ChatBoostFeatures
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['features']),
            $array['min_profile_background_custom_emoji_boost_level'],
            $array['min_background_custom_emoji_boost_level'],
            $array['min_emoji_status_boost_level'],
            $array['min_chat_theme_background_boost_level'],
            $array['min_custom_background_boost_level'],
            $array['min_custom_emoji_sticker_set_boost_level'],
            $array['min_automatic_translation_boost_level'],
            $array['min_speech_recognition_boost_level'],
            $array['min_sponsored_message_disable_boost_level'],
        );
    }

    public function getFeatures(): array
    {
        return $this->features;
    }

    public function getMinAutomaticTranslationBoostLevel(): int
    {
        return $this->minAutomaticTranslationBoostLevel;
    }

    public function getMinBackgroundCustomEmojiBoostLevel(): int
    {
        return $this->minBackgroundCustomEmojiBoostLevel;
    }

    public function getMinChatThemeBackgroundBoostLevel(): int
    {
        return $this->minChatThemeBackgroundBoostLevel;
    }

    public function getMinCustomBackgroundBoostLevel(): int
    {
        return $this->minCustomBackgroundBoostLevel;
    }

    public function getMinCustomEmojiStickerSetBoostLevel(): int
    {
        return $this->minCustomEmojiStickerSetBoostLevel;
    }

    public function getMinEmojiStatusBoostLevel(): int
    {
        return $this->minEmojiStatusBoostLevel;
    }

    public function getMinProfileBackgroundCustomEmojiBoostLevel(): int
    {
        return $this->minProfileBackgroundCustomEmojiBoostLevel;
    }

    public function getMinSpeechRecognitionBoostLevel(): int
    {
        return $this->minSpeechRecognitionBoostLevel;
    }

    public function getMinSponsoredMessageDisableBoostLevel(): int
    {
        return $this->minSponsoredMessageDisableBoostLevel;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                                           => static::TYPE_NAME,
            'features'                                        => array_map(static fn($x) => $x->typeSerialize(), $this->features),
            'min_profile_background_custom_emoji_boost_level' => $this->minProfileBackgroundCustomEmojiBoostLevel,
            'min_background_custom_emoji_boost_level'         => $this->minBackgroundCustomEmojiBoostLevel,
            'min_emoji_status_boost_level'                    => $this->minEmojiStatusBoostLevel,
            'min_chat_theme_background_boost_level'           => $this->minChatThemeBackgroundBoostLevel,
            'min_custom_background_boost_level'               => $this->minCustomBackgroundBoostLevel,
            'min_custom_emoji_sticker_set_boost_level'        => $this->minCustomEmojiStickerSetBoostLevel,
            'min_automatic_translation_boost_level'           => $this->minAutomaticTranslationBoostLevel,
            'min_speech_recognition_boost_level'              => $this->minSpeechRecognitionBoostLevel,
            'min_sponsored_message_disable_boost_level'       => $this->minSponsoredMessageDisableBoostLevel,
        ];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Profile;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about supported accent color for user profile photo background.
 */
class ProfileAccentColor extends TdObject
{
    public const string TYPE_NAME = 'profileAccentColor';

    public function __construct(
        /**
         * Accent colors expected to be used in dark themes.
         */
        protected ProfileAccentColors $darkThemeColors,
        /**
         * Profile accent color identifier.
         */
        protected int                 $id,
        /**
         * Accent colors expected to be used in light themes.
         */
        protected ProfileAccentColors $lightThemeColors,
        /**
         * The minimum chat boost level required to use the color in a channel chat.
         */
        protected int                 $minChannelChatBoostLevel,
        /**
         * The minimum chat boost level required to use the color in a supergroup chat.
         */
        protected int                 $minSupergroupChatBoostLevel,
    ) {}

    public static function fromArray(array $array): ProfileAccentColor
    {
        return new static(
            darkThemeColors            : TdSchemaRegistry::fromArray($array['dark_theme_colors']),
            id                         : $array['id'],
            lightThemeColors           : TdSchemaRegistry::fromArray($array['light_theme_colors']),
            minChannelChatBoostLevel   : $array['min_channel_chat_boost_level'],
            minSupergroupChatBoostLevel: $array['min_supergroup_chat_boost_level'],
        );
    }

    public function getDarkThemeColors(): ProfileAccentColors
    {
        return $this->darkThemeColors;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getLightThemeColors(): ProfileAccentColors
    {
        return $this->lightThemeColors;
    }

    public function getMinChannelChatBoostLevel(): int
    {
        return $this->minChannelChatBoostLevel;
    }

    public function getMinSupergroupChatBoostLevel(): int
    {
        return $this->minSupergroupChatBoostLevel;
    }

    public function setDarkThemeColors(ProfileAccentColors $value): static
    {
        $this->darkThemeColors = $value;

        return $this;
    }

    public function setId(int $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setLightThemeColors(ProfileAccentColors $value): static
    {
        $this->lightThemeColors = $value;

        return $this;
    }

    public function setMinChannelChatBoostLevel(int $value): static
    {
        $this->minChannelChatBoostLevel = $value;

        return $this;
    }

    public function setMinSupergroupChatBoostLevel(int $value): static
    {
        $this->minSupergroupChatBoostLevel = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                           => static::TYPE_NAME,
            'dark_theme_colors'               => $this->darkThemeColors->jsonSerialize(),
            'id'                              => $this->id,
            'light_theme_colors'              => $this->lightThemeColors->jsonSerialize(),
            'min_channel_chat_boost_level'    => $this->minChannelChatBoostLevel,
            'min_supergroup_chat_boost_level' => $this->minSupergroupChatBoostLevel,
        ];
    }
}

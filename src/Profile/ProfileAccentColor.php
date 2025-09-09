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
    public const TYPE_NAME = 'profileAccentColor';

    public function __construct(
        /**
         * Profile accent color identifier.
         */
        protected int                 $id,
        /**
         * Accent colors expected to be used in light themes.
         */
        protected ProfileAccentColors $lightThemeColors,
        /**
         * Accent colors expected to be used in dark themes.
         */
        protected ProfileAccentColors $darkThemeColors,
        /**
         * The minimum chat boost level required to use the color in a supergroup chat.
         */
        protected int                 $minSupergroupChatBoostLevel,
        /**
         * The minimum chat boost level required to use the color in a channel chat.
         */
        protected int                 $minChannelChatBoostLevel,
    ) {}

    public static function fromArray(array $array): ProfileAccentColor
    {
        return new static(
            $array['id'],
            TdSchemaRegistry::fromArray($array['light_theme_colors']),
            TdSchemaRegistry::fromArray($array['dark_theme_colors']),
            $array['min_supergroup_chat_boost_level'],
            $array['min_channel_chat_boost_level'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'                           => static::TYPE_NAME,
            'id'                              => $this->id,
            'light_theme_colors'              => $this->lightThemeColors->typeSerialize(),
            'dark_theme_colors'               => $this->darkThemeColors->typeSerialize(),
            'min_supergroup_chat_boost_level' => $this->minSupergroupChatBoostLevel,
            'min_channel_chat_boost_level'    => $this->minChannelChatBoostLevel,
        ];
    }
}

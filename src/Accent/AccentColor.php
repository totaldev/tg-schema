<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Accent;

use Totaldev\TgSchema\TdObject;

/**
 * Contains information about supported accent color for user/chat name, background of empty chat photo, replies to messages and link previews.
 */
class AccentColor extends TdObject
{
    public const string TYPE_NAME = 'accentColor';

    public function __construct(
        /**
         * Identifier of a built-in color to use in places, where only one color is needed; 0-6.
         */
        protected int   $builtInAccentColorId,
        /**
         * The list of 1-3 colors in RGB format, describing the accent color, as expected to be shown in dark themes.
         *
         * @var int[]
         */
        protected array $darkThemeColors,
        /**
         * Accent color identifier.
         */
        protected int   $id,
        /**
         * The list of 1-3 colors in RGB format, describing the accent color, as expected to be shown in light themes.
         *
         * @var int[]
         */
        protected array $lightThemeColors,
        /**
         * The minimum chat boost level required to use the color in a channel chat.
         */
        protected int   $minChannelChatBoostLevel,
    ) {}

    public static function fromArray(array $array): AccentColor
    {
        return new static(
            builtInAccentColorId    : $array['built_in_accent_color_id'],
            darkThemeColors         : $array['dark_theme_colors'],
            id                      : $array['id'],
            lightThemeColors        : $array['light_theme_colors'],
            minChannelChatBoostLevel: $array['min_channel_chat_boost_level'],
        );
    }

    public function getBuiltInAccentColorId(): int
    {
        return $this->builtInAccentColorId;
    }

    public function getDarkThemeColors(): array
    {
        return $this->darkThemeColors;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getLightThemeColors(): array
    {
        return $this->lightThemeColors;
    }

    public function getMinChannelChatBoostLevel(): int
    {
        return $this->minChannelChatBoostLevel;
    }

    public function setBuiltInAccentColorId(int $value): static
    {
        $this->builtInAccentColorId = $value;

        return $this;
    }

    public function setDarkThemeColors(array $value): static
    {
        $this->darkThemeColors = $value;

        return $this;
    }

    public function setId(int $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setLightThemeColors(array $value): static
    {
        $this->lightThemeColors = $value;

        return $this;
    }

    public function setMinChannelChatBoostLevel(int $value): static
    {
        $this->minChannelChatBoostLevel = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                        => static::TYPE_NAME,
            'built_in_accent_color_id'     => $this->builtInAccentColorId,
            'dark_theme_colors'            => $this->darkThemeColors,
            'id'                           => $this->id,
            'light_theme_colors'           => $this->lightThemeColors,
            'min_channel_chat_boost_level' => $this->minChannelChatBoostLevel,
        ];
    }
}

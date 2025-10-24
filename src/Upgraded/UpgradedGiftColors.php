<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Upgraded;

use Totaldev\TgSchema\TdObject;

/**
 * Contains information about color scheme for user's name, background of empty chat photo, replies to messages and link previews.
 */
class UpgradedGiftColors extends TdObject
{
    public const string TYPE_NAME = 'upgradedGiftColors';

    public function __construct(
        /**
         * Unique identifier of the upgraded gift colors.
         */
        protected int   $id,
        /**
         * Custom emoji identifier of the model of the upgraded gift.
         */
        protected int   $modelCustomEmojiId,
        /**
         * Custom emoji identifier of the symbol of the upgraded gift.
         */
        protected int   $symbolCustomEmojiId,
        /**
         * Accent color to use in light themes in RGB format.
         */
        protected int   $lightThemeAccentColor,
        /**
         * The list of 1-3 colors in RGB format, describing the accent color, as expected to be shown in light themes.
         *
         * @var int[]
         */
        protected array $lightThemeColors,
        /**
         * Accent color to use in dark themes in RGB format.
         */
        protected int   $darkThemeAccentColor,
        /**
         * The list of 1-3 colors in RGB format, describing the accent color, as expected to be shown in dark themes.
         *
         * @var int[]
         */
        protected array $darkThemeColors,
    ) {}

    public static function fromArray(array $array): UpgradedGiftColors
    {
        return new static(
            $array['id'],
            $array['model_custom_emoji_id'],
            $array['symbol_custom_emoji_id'],
            $array['light_theme_accent_color'],
            $array['light_theme_colors'],
            $array['dark_theme_accent_color'],
            $array['dark_theme_colors'],
        );
    }

    public function getDarkThemeAccentColor(): int
    {
        return $this->darkThemeAccentColor;
    }

    public function getDarkThemeColors(): array
    {
        return $this->darkThemeColors;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getLightThemeAccentColor(): int
    {
        return $this->lightThemeAccentColor;
    }

    public function getLightThemeColors(): array
    {
        return $this->lightThemeColors;
    }

    public function getModelCustomEmojiId(): int
    {
        return $this->modelCustomEmojiId;
    }

    public function getSymbolCustomEmojiId(): int
    {
        return $this->symbolCustomEmojiId;
    }

    public function setDarkThemeAccentColor(int $value): static
    {
        $this->darkThemeAccentColor = $value;

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

    public function setLightThemeAccentColor(int $value): static
    {
        $this->lightThemeAccentColor = $value;

        return $this;
    }

    public function setLightThemeColors(array $value): static
    {
        $this->lightThemeColors = $value;

        return $this;
    }

    public function setModelCustomEmojiId(int $value): static
    {
        $this->modelCustomEmojiId = $value;

        return $this;
    }

    public function setSymbolCustomEmojiId(int $value): static
    {
        $this->symbolCustomEmojiId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                    => static::TYPE_NAME,
            'id'                       => $this->id,
            'model_custom_emoji_id'    => $this->modelCustomEmojiId,
            'symbol_custom_emoji_id'   => $this->symbolCustomEmojiId,
            'light_theme_accent_color' => $this->lightThemeAccentColor,
            'light_theme_colors'       => $this->lightThemeColors,
            'dark_theme_accent_color'  => $this->darkThemeAccentColor,
            'dark_theme_colors'        => $this->darkThemeColors,
        ];
    }
}

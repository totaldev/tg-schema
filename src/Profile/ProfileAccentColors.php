<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Profile;

use Totaldev\TgSchema\TdObject;

/**
 * Contains information about supported accent colors for user profile photo background in RGB format.
 */
class ProfileAccentColors extends TdObject
{
    public const string TYPE_NAME = 'profileAccentColors';

    public function __construct(
        /**
         * The list of 1-2 colors in RGB format, describing the colors, as expected to be used for the profile photo background.
         *
         * @var int[]
         */
        protected array $backgroundColors,
        /**
         * The list of 1-2 colors in RGB format, describing the colors, as expected to be shown in the color palette settings.
         *
         * @var int[]
         */
        protected array $paletteColors,
        /**
         * The list of 2 colors in RGB format, describing the colors of the gradient to be used for the unread active story indicator around profile photo.
         *
         * @var int[]
         */
        protected array $storyColors,
    ) {}

    public static function fromArray(array $array): ProfileAccentColors
    {
        return new static(
            backgroundColors: $array['background_colors'],
            paletteColors   : $array['palette_colors'],
            storyColors     : $array['story_colors'],
        );
    }

    public function getBackgroundColors(): array
    {
        return $this->backgroundColors;
    }

    public function getPaletteColors(): array
    {
        return $this->paletteColors;
    }

    public function getStoryColors(): array
    {
        return $this->storyColors;
    }

    public function setBackgroundColors(array $value): static
    {
        $this->backgroundColors = $value;

        return $this;
    }

    public function setPaletteColors(array $value): static
    {
        $this->paletteColors = $value;

        return $this;
    }

    public function setStoryColors(array $value): static
    {
        $this->storyColors = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'background_colors' => $this->backgroundColors,
            'palette_colors'    => $this->paletteColors,
            'story_colors'      => $this->storyColors,
        ];
    }
}

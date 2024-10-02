<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Theme;

use Totaldev\TgSchema\TdObject;

/**
 * Contains parameters of the application theme.
 */
class ThemeParameters extends TdObject
{
    public const TYPE_NAME = 'themeParameters';

    public function __construct(
        /**
         * A color of the background in the RGB24 format.
         */
        protected int $backgroundColor,
        /**
         * A secondary color for the background in the RGB24 format.
         */
        protected int $secondaryBackgroundColor,
        /**
         * A color of the header background in the RGB24 format.
         */
        protected int $headerBackgroundColor,
        /**
         * A color of the bottom bar background in the RGB24 format.
         */
        protected int $bottomBarBackgroundColor,
        /**
         * A color of the section background in the RGB24 format.
         */
        protected int $sectionBackgroundColor,
        /**
         * A color of the section separator in the RGB24 format.
         */
        protected int $sectionSeparatorColor,
        /**
         * A color of text in the RGB24 format.
         */
        protected int $textColor,
        /**
         * An accent color of the text in the RGB24 format.
         */
        protected int $accentTextColor,
        /**
         * A color of text on the section headers in the RGB24 format.
         */
        protected int $sectionHeaderTextColor,
        /**
         * A color of the subtitle text in the RGB24 format.
         */
        protected int $subtitleTextColor,
        /**
         * A color of the text for destructive actions in the RGB24 format.
         */
        protected int $destructiveTextColor,
        /**
         * A color of hints in the RGB24 format.
         */
        protected int $hintColor,
        /**
         * A color of links in the RGB24 format.
         */
        protected int $linkColor,
        /**
         * A color of the buttons in the RGB24 format.
         */
        protected int $buttonColor,
        /**
         * A color of text on the buttons in the RGB24 format.
         */
        protected int $buttonTextColor,
    ) {}

    public static function fromArray(array $array): ThemeParameters
    {
        return new static(
            $array['background_color'],
            $array['secondary_background_color'],
            $array['header_background_color'],
            $array['bottom_bar_background_color'],
            $array['section_background_color'],
            $array['section_separator_color'],
            $array['text_color'],
            $array['accent_text_color'],
            $array['section_header_text_color'],
            $array['subtitle_text_color'],
            $array['destructive_text_color'],
            $array['hint_color'],
            $array['link_color'],
            $array['button_color'],
            $array['button_text_color'],
        );
    }

    public function getAccentTextColor(): int
    {
        return $this->accentTextColor;
    }

    public function getBackgroundColor(): int
    {
        return $this->backgroundColor;
    }

    public function getBottomBarBackgroundColor(): int
    {
        return $this->bottomBarBackgroundColor;
    }

    public function getButtonColor(): int
    {
        return $this->buttonColor;
    }

    public function getButtonTextColor(): int
    {
        return $this->buttonTextColor;
    }

    public function getDestructiveTextColor(): int
    {
        return $this->destructiveTextColor;
    }

    public function getHeaderBackgroundColor(): int
    {
        return $this->headerBackgroundColor;
    }

    public function getHintColor(): int
    {
        return $this->hintColor;
    }

    public function getLinkColor(): int
    {
        return $this->linkColor;
    }

    public function getSecondaryBackgroundColor(): int
    {
        return $this->secondaryBackgroundColor;
    }

    public function getSectionBackgroundColor(): int
    {
        return $this->sectionBackgroundColor;
    }

    public function getSectionHeaderTextColor(): int
    {
        return $this->sectionHeaderTextColor;
    }

    public function getSectionSeparatorColor(): int
    {
        return $this->sectionSeparatorColor;
    }

    public function getSubtitleTextColor(): int
    {
        return $this->subtitleTextColor;
    }

    public function getTextColor(): int
    {
        return $this->textColor;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                       => static::TYPE_NAME,
            'background_color'            => $this->backgroundColor,
            'secondary_background_color'  => $this->secondaryBackgroundColor,
            'header_background_color'     => $this->headerBackgroundColor,
            'bottom_bar_background_color' => $this->bottomBarBackgroundColor,
            'section_background_color'    => $this->sectionBackgroundColor,
            'section_separator_color'     => $this->sectionSeparatorColor,
            'text_color'                  => $this->textColor,
            'accent_text_color'           => $this->accentTextColor,
            'section_header_text_color'   => $this->sectionHeaderTextColor,
            'subtitle_text_color'         => $this->subtitleTextColor,
            'destructive_text_color'      => $this->destructiveTextColor,
            'hint_color'                  => $this->hintColor,
            'link_color'                  => $this->linkColor,
            'button_color'                => $this->buttonColor,
            'button_text_color'           => $this->buttonTextColor,
        ];
    }
}

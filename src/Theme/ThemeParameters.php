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
    public const string TYPE_NAME = 'themeParameters';

    public function __construct(
        /**
         * An accent color of the text in the RGB format.
         */
        protected int $accentTextColor,
        /**
         * A color of the background in the RGB format.
         */
        protected int $backgroundColor,
        /**
         * A color of the bottom bar background in the RGB format.
         */
        protected int $bottomBarBackgroundColor,
        /**
         * A color of the buttons in the RGB format.
         */
        protected int $buttonColor,
        /**
         * A color of text on the buttons in the RGB format.
         */
        protected int $buttonTextColor,
        /**
         * A color of the text for destructive actions in the RGB format.
         */
        protected int $destructiveTextColor,
        /**
         * A color of the header background in the RGB format.
         */
        protected int $headerBackgroundColor,
        /**
         * A color of hints in the RGB format.
         */
        protected int $hintColor,
        /**
         * A color of links in the RGB format.
         */
        protected int $linkColor,
        /**
         * A secondary color for the background in the RGB format.
         */
        protected int $secondaryBackgroundColor,
        /**
         * A color of the section background in the RGB format.
         */
        protected int $sectionBackgroundColor,
        /**
         * A color of text on the section headers in the RGB format.
         */
        protected int $sectionHeaderTextColor,
        /**
         * A color of the section separator in the RGB format.
         */
        protected int $sectionSeparatorColor,
        /**
         * A color of the subtitle text in the RGB format.
         */
        protected int $subtitleTextColor,
        /**
         * A color of text in the RGB format.
         */
        protected int $textColor,
    ) {}

    public static function fromArray(array $array): ThemeParameters
    {
        return new static(
            accentTextColor         : $array['accent_text_color'],
            backgroundColor         : $array['background_color'],
            bottomBarBackgroundColor: $array['bottom_bar_background_color'],
            buttonColor             : $array['button_color'],
            buttonTextColor         : $array['button_text_color'],
            destructiveTextColor    : $array['destructive_text_color'],
            headerBackgroundColor   : $array['header_background_color'],
            hintColor               : $array['hint_color'],
            linkColor               : $array['link_color'],
            secondaryBackgroundColor: $array['secondary_background_color'],
            sectionBackgroundColor  : $array['section_background_color'],
            sectionHeaderTextColor  : $array['section_header_text_color'],
            sectionSeparatorColor   : $array['section_separator_color'],
            subtitleTextColor       : $array['subtitle_text_color'],
            textColor               : $array['text_color'],
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

    public function setAccentTextColor(int $value): static
    {
        $this->accentTextColor = $value;

        return $this;
    }

    public function setBackgroundColor(int $value): static
    {
        $this->backgroundColor = $value;

        return $this;
    }

    public function setBottomBarBackgroundColor(int $value): static
    {
        $this->bottomBarBackgroundColor = $value;

        return $this;
    }

    public function setButtonColor(int $value): static
    {
        $this->buttonColor = $value;

        return $this;
    }

    public function setButtonTextColor(int $value): static
    {
        $this->buttonTextColor = $value;

        return $this;
    }

    public function setDestructiveTextColor(int $value): static
    {
        $this->destructiveTextColor = $value;

        return $this;
    }

    public function setHeaderBackgroundColor(int $value): static
    {
        $this->headerBackgroundColor = $value;

        return $this;
    }

    public function setHintColor(int $value): static
    {
        $this->hintColor = $value;

        return $this;
    }

    public function setLinkColor(int $value): static
    {
        $this->linkColor = $value;

        return $this;
    }

    public function setSecondaryBackgroundColor(int $value): static
    {
        $this->secondaryBackgroundColor = $value;

        return $this;
    }

    public function setSectionBackgroundColor(int $value): static
    {
        $this->sectionBackgroundColor = $value;

        return $this;
    }

    public function setSectionHeaderTextColor(int $value): static
    {
        $this->sectionHeaderTextColor = $value;

        return $this;
    }

    public function setSectionSeparatorColor(int $value): static
    {
        $this->sectionSeparatorColor = $value;

        return $this;
    }

    public function setSubtitleTextColor(int $value): static
    {
        $this->subtitleTextColor = $value;

        return $this;
    }

    public function setTextColor(int $value): static
    {
        $this->textColor = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                       => static::TYPE_NAME,
            'accent_text_color'           => $this->accentTextColor,
            'background_color'            => $this->backgroundColor,
            'bottom_bar_background_color' => $this->bottomBarBackgroundColor,
            'button_color'                => $this->buttonColor,
            'button_text_color'           => $this->buttonTextColor,
            'destructive_text_color'      => $this->destructiveTextColor,
            'header_background_color'     => $this->headerBackgroundColor,
            'hint_color'                  => $this->hintColor,
            'link_color'                  => $this->linkColor,
            'secondary_background_color'  => $this->secondaryBackgroundColor,
            'section_background_color'    => $this->sectionBackgroundColor,
            'section_header_text_color'   => $this->sectionHeaderTextColor,
            'section_separator_color'     => $this->sectionSeparatorColor,
            'subtitle_text_color'         => $this->subtitleTextColor,
            'text_color'                  => $this->textColor,
        ];
    }
}

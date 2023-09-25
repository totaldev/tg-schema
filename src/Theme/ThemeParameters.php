<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Theme;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains parameters of the application theme
 */
class ThemeParameters extends TdObject
{
    public const TYPE_NAME = 'themeParameters';

    /**
     * A color of the background in the RGB24 format
     *
     * @var int
     */
    protected int $backgroundColor;

    /**
     * A color of the buttons in the RGB24 format
     *
     * @var int
     */
    protected int $buttonColor;

    /**
     * A color of text on the buttons in the RGB24 format
     *
     * @var int
     */
    protected int $buttonTextColor;

    /**
     * A color of hints in the RGB24 format
     *
     * @var int
     */
    protected int $hintColor;

    /**
     * A color of links in the RGB24 format
     *
     * @var int
     */
    protected int $linkColor;

    /**
     * A secondary color for the background in the RGB24 format
     *
     * @var int
     */
    protected int $secondaryBackgroundColor;

    /**
     * A color of text in the RGB24 format
     *
     * @var int
     */
    protected int $textColor;

    public function __construct(
        int $backgroundColor,
        int $secondaryBackgroundColor,
        int $textColor,
        int $hintColor,
        int $linkColor,
        int $buttonColor,
        int $buttonTextColor,
    )
    {
        $this->backgroundColor = $backgroundColor;
        $this->secondaryBackgroundColor = $secondaryBackgroundColor;
        $this->textColor = $textColor;
        $this->hintColor = $hintColor;
        $this->linkColor = $linkColor;
        $this->buttonColor = $buttonColor;
        $this->buttonTextColor = $buttonTextColor;
    }

    public static function fromArray(array $array): ThemeParameters
    {
        return new static(
            $array['background_color'],
            $array['secondary_background_color'],
            $array['text_color'],
            $array['hint_color'],
            $array['link_color'],
            $array['button_color'],
            $array['button_text_color'],
        );
    }

    public function getBackgroundColor(): int
    {
        return $this->backgroundColor;
    }

    public function getButtonColor(): int
    {
        return $this->buttonColor;
    }

    public function getButtonTextColor(): int
    {
        return $this->buttonTextColor;
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

    public function getTextColor(): int
    {
        return $this->textColor;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'background_color' => $this->backgroundColor,
            'secondary_background_color' => $this->secondaryBackgroundColor,
            'text_color' => $this->textColor,
            'hint_color' => $this->hintColor,
            'link_color' => $this->linkColor,
            'button_color' => $this->buttonColor,
            'button_text_color' => $this->buttonTextColor,
        ];
    }
}

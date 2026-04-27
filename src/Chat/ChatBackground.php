<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\Background\Background;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a background set for a specific chat.
 */
class ChatBackground extends TdObject
{
    public const string TYPE_NAME = 'chatBackground';

    public function __construct(
        /**
         * The background.
         */
        protected Background $background,
        /**
         * Dimming of the background in dark themes, as a percentage; 0-100. Applied only to Wallpaper and Fill types of background.
         */
        protected int        $darkThemeDimming,
    ) {}

    public static function fromArray(array $array): ChatBackground
    {
        return new static(
            background      : TdSchemaRegistry::fromArray($array['background']),
            darkThemeDimming: $array['dark_theme_dimming'],
        );
    }

    public function getBackground(): Background
    {
        return $this->background;
    }

    public function getDarkThemeDimming(): int
    {
        return $this->darkThemeDimming;
    }

    public function setBackground(Background $value): static
    {
        $this->background = $value;

        return $this;
    }

    public function setDarkThemeDimming(int $value): static
    {
        $this->darkThemeDimming = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'background'         => $this->background->jsonSerialize(),
            'dark_theme_dimming' => $this->darkThemeDimming,
        ];
    }
}

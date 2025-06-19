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
    public const TYPE_NAME = 'chatBackground';

    public function __construct(
        /**
         * The background.
         */
        protected Background $background,
        /**
         * Dimming of the background in dark themes, as a percentage; 0-100. Applied only to Wallpaper and Fill types of background.
         */
        protected int        $darkThemeDimming
    ) {}

    public static function fromArray(array $array): ChatBackground
    {
        return new static(
            TdSchemaRegistry::fromArray($array['background']),
            $array['dark_theme_dimming'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'background'         => $this->background->typeSerialize(),
            'dark_theme_dimming' => $this->darkThemeDimming,
        ];
    }
}

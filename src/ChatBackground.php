<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * Describes a background set for a specific chat
 */
class ChatBackground extends TdObject
{
    public const TYPE_NAME = 'chatBackground';

    /**
     * The background
     *
     * @var Background
     */
    protected Background $background;

    /**
     * Dimming of the background in dark themes, as a percentage; 0-100
     *
     * @var int
     */
    protected int $darkThemeDimming;

    public function __construct(Background $background, int $darkThemeDimming)
    {
        $this->background = $background;
        $this->darkThemeDimming = $darkThemeDimming;
    }

    public static function fromArray(array $array): ChatBackground
    {
        return new static(
            TdSchemaRegistry::fromArray($array['background']),
            $array['dark_theme_dimming'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'background' => $this->background->typeSerialize(),
            'dark_theme_dimming' => $this->darkThemeDimming,
        ];
    }

    public function getBackground(): Background
    {
        return $this->background;
    }

    public function getDarkThemeDimming(): int
    {
        return $this->darkThemeDimming;
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

/**
 * An area with information about weather.
 */
class StoryAreaTypeWeather extends StoryAreaType
{
    public const TYPE_NAME = 'storyAreaTypeWeather';

    public function __construct(
        /**
         * Temperature, in degree Celsius.
         */
        protected float  $temperature,
        /**
         * Emoji representing the weather.
         */
        protected string $emoji,
        /**
         * A color of the area background in the ARGB format.
         */
        protected int    $backgroundColor
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StoryAreaTypeWeather
    {
        return new static(
            $array['temperature'],
            $array['emoji'],
            $array['background_color'],
        );
    }

    public function getBackgroundColor(): int
    {
        return $this->backgroundColor;
    }

    public function getEmoji(): string
    {
        return $this->emoji;
    }

    public function getTemperature(): float
    {
        return $this->temperature;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'temperature'      => $this->temperature,
            'emoji'            => $this->emoji,
            'background_color' => $this->backgroundColor,
        ];
    }
}

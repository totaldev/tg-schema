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
    public const string TYPE_NAME = 'storyAreaTypeWeather';

    public function __construct(
        /**
         * A color of the area background in the ARGB format.
         */
        protected int    $backgroundColor,
        /**
         * Emoji representing the weather.
         */
        protected string $emoji,
        /**
         * Temperature, in degree Celsius.
         */
        protected float  $temperature,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StoryAreaTypeWeather
    {
        return new static(
            backgroundColor: $array['background_color'],
            emoji          : $array['emoji'],
            temperature    : $array['temperature'],
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

    public function setBackgroundColor(int $value): static
    {
        $this->backgroundColor = $value;

        return $this;
    }

    public function setEmoji(string $value): static
    {
        $this->emoji = $value;

        return $this;
    }

    public function setTemperature(float $value): static
    {
        $this->temperature = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'background_color' => $this->backgroundColor,
            'emoji'            => $this->emoji,
            'temperature'      => $this->temperature,
        ];
    }
}

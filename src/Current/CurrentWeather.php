<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Current;

use Totaldev\TgSchema\TdObject;

/**
 * Describes the current weather.
 */
class CurrentWeather extends TdObject
{
    public const string TYPE_NAME = 'currentWeather';

    public function __construct(
        /**
         * Emoji representing the weather.
         */
        protected string $emoji,
        /**
         * Temperature, in degree Celsius.
         */
        protected float  $temperature,
    ) {}

    public static function fromArray(array $array): CurrentWeather
    {
        return new static(
            emoji      : $array['emoji'],
            temperature: $array['temperature'],
        );
    }

    public function getEmoji(): string
    {
        return $this->emoji;
    }

    public function getTemperature(): float
    {
        return $this->temperature;
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
            '@type'       => static::TYPE_NAME,
            'emoji'       => $this->emoji,
            'temperature' => $this->temperature,
        ];
    }
}

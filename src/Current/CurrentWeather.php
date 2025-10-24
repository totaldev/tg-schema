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
         * Temperature, in degree Celsius.
         */
        protected float  $temperature,
        /**
         * Emoji representing the weather.
         */
        protected string $emoji,
    ) {}

    public static function fromArray(array $array): CurrentWeather
    {
        return new static(
            $array['temperature'],
            $array['emoji'],
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
            'temperature' => $this->temperature,
            'emoji'       => $this->emoji,
        ];
    }
}

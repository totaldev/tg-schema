<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Succeeds after a specified amount of time has passed. Can be called before initialization.
 */
class SetAlarm extends TdFunction
{
    public const string TYPE_NAME = 'setAlarm';

    public function __construct(
        /**
         * Number of seconds before the function returns.
         */
        protected float $seconds
    ) {}

    public static function fromArray(array $array): SetAlarm
    {
        return new static(
            seconds: $array['seconds'],
        );
    }

    public function getSeconds(): float
    {
        return $this->seconds;
    }

    public function setSeconds(float $value): static
    {
        $this->seconds = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'seconds' => $this->seconds,
        ];
    }
}

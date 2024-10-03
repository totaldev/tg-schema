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
    public const TYPE_NAME = 'setAlarm';

    public function __construct(
        /**
         * Number of seconds before the function returns.
         */
        protected float $seconds
    ) {}

    public static function fromArray(array $array): SetAlarm
    {
        return new static(
            $array['seconds'],
        );
    }

    public function getSeconds(): float
    {
        return $this->seconds;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'seconds' => $this->seconds,
        ];
    }
}

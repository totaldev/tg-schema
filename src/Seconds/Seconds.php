<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Seconds;

use Totaldev\TgSchema\TdObject;

/**
 * Contains a value representing a number of seconds.
 */
class Seconds extends TdObject
{
    public const TYPE_NAME = 'seconds';

    public function __construct(
        /**
         * Number of seconds.
         */
        protected float $seconds
    ) {}

    public static function fromArray(array $array): Seconds
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

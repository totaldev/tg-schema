<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Point;

use Totaldev\TgSchema\TdObject;

/**
 * A point on a Cartesian plane.
 */
class Point extends TdObject
{
    public const TYPE_NAME = 'point';

    public function __construct(
        /**
         * The point's first coordinate.
         */
        protected float $x,
        /**
         * The point's second coordinate.
         */
        protected float $y,
    ) {}

    public static function fromArray(array $array): Point
    {
        return new static(
            $array['x'],
            $array['y'],
        );
    }

    public function getX(): float
    {
        return $this->x;
    }

    public function getY(): float
    {
        return $this->y;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'x'     => $this->x,
            'y'     => $this->y,
        ];
    }
}

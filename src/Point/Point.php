<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Point;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A point on a Cartesian plane
 */
class Point extends TdObject
{
    public const TYPE_NAME = 'point';

    /**
     * The point's first coordinate
     *
     * @var float
     */
    protected float $x;

    /**
     * The point's second coordinate
     *
     * @var float
     */
    protected float $y;

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public static function fromArray(array $array): Point
    {
        return new static(
            $array['x'],
            $array['y'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'x' => $this->x,
            'y' => $this->y,
        ];
    }

    public function getX(): float
    {
        return $this->x;
    }

    public function getY(): float
    {
        return $this->y;
    }
}

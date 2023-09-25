<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Vector;

use Totaldev\TgSchema\Point\Point;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A cubic Bézier curve to a given point
 */
class VectorPathCommandCubicBezierCurve extends VectorPathCommand
{
    public const TYPE_NAME = 'vectorPathCommandCubicBezierCurve';

    /**
     * The end control point of the curve
     *
     * @var Point
     */
    protected Point $endControlPoint;

    /**
     * The end point of the curve
     *
     * @var Point
     */
    protected Point $endPoint;

    /**
     * The start control point of the curve
     *
     * @var Point
     */
    protected Point $startControlPoint;

    public function __construct(Point $startControlPoint, Point $endControlPoint, Point $endPoint)
    {
        parent::__construct();

        $this->startControlPoint = $startControlPoint;
        $this->endControlPoint = $endControlPoint;
        $this->endPoint = $endPoint;
    }

    public static function fromArray(array $array): VectorPathCommandCubicBezierCurve
    {
        return new static(
            TdSchemaRegistry::fromArray($array['start_control_point']),
            TdSchemaRegistry::fromArray($array['end_control_point']),
            TdSchemaRegistry::fromArray($array['end_point']),
        );
    }

    public function getEndControlPoint(): Point
    {
        return $this->endControlPoint;
    }

    public function getEndPoint(): Point
    {
        return $this->endPoint;
    }

    public function getStartControlPoint(): Point
    {
        return $this->startControlPoint;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'start_control_point' => $this->startControlPoint->typeSerialize(),
            'end_control_point' => $this->endControlPoint->typeSerialize(),
            'end_point' => $this->endPoint->typeSerialize(),
        ];
    }
}

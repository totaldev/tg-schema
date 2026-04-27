<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Vector;

use Totaldev\TgSchema\Point\Point;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A cubic Bézier curve to a given point.
 */
class VectorPathCommandCubicBezierCurve extends VectorPathCommand
{
    public const string TYPE_NAME = 'vectorPathCommandCubicBezierCurve';

    public function __construct(
        /**
         * The end control point of the curve.
         */
        protected Point $endControlPoint,
        /**
         * The end point of the curve.
         */
        protected Point $endPoint,
        /**
         * The start control point of the curve.
         */
        protected Point $startControlPoint,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): VectorPathCommandCubicBezierCurve
    {
        return new static(
            endControlPoint  : TdSchemaRegistry::fromArray($array['end_control_point']),
            endPoint         : TdSchemaRegistry::fromArray($array['end_point']),
            startControlPoint: TdSchemaRegistry::fromArray($array['start_control_point']),
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

    public function setEndControlPoint(Point $value): static
    {
        $this->endControlPoint = $value;

        return $this;
    }

    public function setEndPoint(Point $value): static
    {
        $this->endPoint = $value;

        return $this;
    }

    public function setStartControlPoint(Point $value): static
    {
        $this->startControlPoint = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'end_control_point'   => $this->endControlPoint->jsonSerialize(),
            'end_point'           => $this->endPoint->jsonSerialize(),
            'start_control_point' => $this->startControlPoint->jsonSerialize(),
        ];
    }
}

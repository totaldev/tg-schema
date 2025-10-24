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
         * The start control point of the curve.
         */
        protected Point $startControlPoint,
        /**
         * The end control point of the curve.
         */
        protected Point $endControlPoint,
        /**
         * The end point of the curve.
         */
        protected Point $endPoint,
    ) {
        parent::__construct();
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
            'start_control_point' => $this->startControlPoint->typeSerialize(),
            'end_control_point'   => $this->endControlPoint->typeSerialize(),
            'end_point'           => $this->endPoint->typeSerialize(),
        ];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Vector;

use Totaldev\TgSchema\Point\Point;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A straight line to a given point.
 */
class VectorPathCommandLine extends VectorPathCommand
{
    public const TYPE_NAME = 'vectorPathCommandLine';

    public function __construct(
        /**
         * The end point of the straight line.
         */
        protected Point $endPoint
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): VectorPathCommandLine
    {
        return new static(
            TdSchemaRegistry::fromArray($array['end_point']),
        );
    }

    public function getEndPoint(): Point
    {
        return $this->endPoint;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'end_point' => $this->endPoint->typeSerialize(),
        ];
    }
}

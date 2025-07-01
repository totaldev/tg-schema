<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Test;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns the received vector of objects containing a number; for testing only. This is an offline method. Can be called before authorization.
 */
class TestCallVectorIntObject extends TdFunction
{
    public const TYPE_NAME = 'testCallVectorIntObject';

    public function __construct(
        /**
         * Vector of objects to return.
         *
         * @var TestInt[]
         */
        protected array $x
    ) {}

    public static function fromArray(array $array): TestCallVectorIntObject
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['x']),
        );
    }

    public function getX(): array
    {
        return $this->x;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'x'     => array_map(static fn($x) => $x->typeSerialize(), $this->x),
        ];
    }
}

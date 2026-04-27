<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Test;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns the received vector of objects containing a string; for testing only. This is an offline method. Can be called before authorization.
 */
class TestCallVectorStringObject extends TdFunction
{
    public const string TYPE_NAME = 'testCallVectorStringObject';

    public function __construct(
        /**
         * Vector of objects to return.
         *
         * @var TestString[]
         */
        protected array $x
    ) {}

    public static function fromArray(array $array): TestCallVectorStringObject
    {
        return new static(
            x: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['x']),
        );
    }

    public function getX(): array
    {
        return $this->x;
    }

    public function setX(array $value): static
    {
        $this->x = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'x'     => array_map(static fn($x) => $x->jsonSerialize(), $this->x),
        ];
    }
}

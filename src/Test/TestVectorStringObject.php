<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Test;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A simple object containing a vector of objects that hold a string; for testing only.
 */
class TestVectorStringObject extends TdObject
{
    public const TYPE_NAME = 'testVectorStringObject';

    public function __construct(
        /**
         * Vector of objects.
         *
         * @var TestString[]
         */
        protected array $value
    ) {}

    public static function fromArray(array $array): TestVectorStringObject
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['value']),
        );
    }

    public function getValue(): array
    {
        return $this->value;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(static fn($x) => $x->typeSerialize(), $this->value),
        ];
    }
}

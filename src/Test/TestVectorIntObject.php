<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Test;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A simple object containing a vector of objects that hold a number; for testing only.
 */
class TestVectorIntObject extends TdObject
{
    public const TYPE_NAME = 'testVectorIntObject';

    public function __construct(
        /**
         * Vector of objects.
         *
         * @var TestInt[]
         */
        protected array $value
    ) {}

    public static function fromArray(array $array): TestVectorIntObject
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
            'value' => array_map(static fn($x) => $x->typeSerialize(), $this->value),
        ];
    }
}

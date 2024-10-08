<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Test;

use Totaldev\TgSchema\TdObject;

/**
 * A simple object containing a vector of numbers; for testing only.
 */
class TestVectorInt extends TdObject
{
    public const TYPE_NAME = 'testVectorInt';

    public function __construct(
        /**
         * Vector of numbers.
         *
         * @var int[]
         */
        protected array $value
    ) {}

    public static function fromArray(array $array): TestVectorInt
    {
        return new static(
            $array['value'],
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
            'value' => $this->value,
        ];
    }
}

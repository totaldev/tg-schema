<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Test;

use Totaldev\TgSchema\TdObject;

/**
 * A simple object containing a number; for testing only.
 */
class TestInt extends TdObject
{
    public const TYPE_NAME = 'testInt';

    public function __construct(
        /**
         * Number.
         */
        protected int $value
    ) {}

    public static function fromArray(array $array): TestInt
    {
        return new static(
            $array['value'],
        );
    }

    public function getValue(): int
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

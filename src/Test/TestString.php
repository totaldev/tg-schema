<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Test;

use Totaldev\TgSchema\TdObject;

/**
 * A simple object containing a string; for testing only.
 */
class TestString extends TdObject
{
    public const TYPE_NAME = 'testString';

    public function __construct(
        /**
         * String.
         */
        protected string $value
    ) {}

    public static function fromArray(array $array): TestString
    {
        return new static(
            $array['value'],
        );
    }

    public function getValue(): string
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

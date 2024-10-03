<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Test;

use Totaldev\TgSchema\TdObject;

/**
 * A simple object containing a vector of strings; for testing only.
 */
class TestVectorString extends TdObject
{
    public const TYPE_NAME = 'testVectorString';

    public function __construct(
        /**
         * Vector of strings.
         *
         * @var string[]
         */
        protected array $value
    ) {}

    public static function fromArray(array $array): TestVectorString
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

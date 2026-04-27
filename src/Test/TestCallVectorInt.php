<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Test;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the received vector of numbers; for testing only. This is an offline method. Can be called before authorization.
 */
class TestCallVectorInt extends TdFunction
{
    public const string TYPE_NAME = 'testCallVectorInt';

    public function __construct(
        /**
         * Vector of numbers to return.
         *
         * @var int[]
         */
        protected array $x
    ) {}

    public static function fromArray(array $array): TestCallVectorInt
    {
        return new static(
            x: $array['x'],
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
            'x'     => $this->x,
        ];
    }
}

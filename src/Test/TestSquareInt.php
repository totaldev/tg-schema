<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Test;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the squared received number; for testing only. This is an offline method. Can be called before authorization.
 */
class TestSquareInt extends TdFunction
{
    public const TYPE_NAME = 'testSquareInt';

    public function __construct(
        /**
         * Number to square.
         */
        protected int $x
    ) {}

    public static function fromArray(array $array): TestSquareInt
    {
        return new static(
            $array['x'],
        );
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'x'     => $this->x,
        ];
    }
}

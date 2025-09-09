<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Test;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the received vector of strings; for testing only. This is an offline method. Can be called before authorization.
 */
class TestCallVectorString extends TdFunction
{
    public const TYPE_NAME = 'testCallVectorString';

    public function __construct(
        /**
         * Vector of strings to return.
         *
         * @var string[]
         */
        protected array $x
    ) {}

    public static function fromArray(array $array): TestCallVectorString
    {
        return new static(
            $array['x'],
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
            'x'     => $this->x,
        ];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Test;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the received bytes; for testing only. This is an offline method. Can be called before authorization.
 */
class TestCallBytes extends TdFunction
{
    public const TYPE_NAME = 'testCallBytes';

    public function __construct(
        /**
         * Bytes to return.
         */
        protected string $x
    ) {}

    public static function fromArray(array $array): TestCallBytes
    {
        return new static(
            $array['x'],
        );
    }

    public function getX(): string
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

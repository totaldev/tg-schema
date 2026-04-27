<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Test;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the received string; for testing only. This is an offline method. Can be called before authorization.
 */
class TestCallString extends TdFunction
{
    public const string TYPE_NAME = 'testCallString';

    public function __construct(
        /**
         * String to return.
         */
        protected string $x
    ) {}

    public static function fromArray(array $array): TestCallString
    {
        return new static(
            x: $array['x'],
        );
    }

    public function getX(): string
    {
        return $this->x;
    }

    public function setX(string $value): static
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

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Json;

/**
 * Represents a numeric JSON value.
 */
class JsonValueNumber extends JsonValue
{
    public const string TYPE_NAME = 'jsonValueNumber';

    public function __construct(
        /**
         * The value.
         */
        protected float $value
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): JsonValueNumber
    {
        return new static(
            value: $array['value'],
        );
    }

    public function getValue(): float
    {
        return $this->value;
    }

    public function setValue(float $value): static
    {
        $this->value = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'value' => $this->value,
        ];
    }
}

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
    public const TYPE_NAME = 'jsonValueNumber';

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
            $array['value'],
        );
    }

    public function getValue(): float
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

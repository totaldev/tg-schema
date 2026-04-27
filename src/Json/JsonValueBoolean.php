<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Json;

/**
 * Represents a boolean JSON value.
 */
class JsonValueBoolean extends JsonValue
{
    public const string TYPE_NAME = 'jsonValueBoolean';

    public function __construct(
        /**
         * The value.
         */
        protected bool $value
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): JsonValueBoolean
    {
        return new static(
            value: $array['value'],
        );
    }

    public function getValue(): bool
    {
        return $this->value;
    }

    public function setValue(bool $value): static
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

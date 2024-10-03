<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Json;

/**
 * Represents a string JSON value.
 */
class JsonValueString extends JsonValue
{
    public const TYPE_NAME = 'jsonValueString';

    public function __construct(
        /**
         * The value.
         */
        protected string $value
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): JsonValueString
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

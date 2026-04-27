<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Json;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a JSON array.
 */
class JsonValueArray extends JsonValue
{
    public const string TYPE_NAME = 'jsonValueArray';

    public function __construct(
        /**
         * The list of array elements.
         *
         * @var JsonValue[]
         */
        protected array $values
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): JsonValueArray
    {
        return new static(
            values: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['values']),
        );
    }

    public function getValues(): array
    {
        return $this->values;
    }

    public function setValues(array $value): static
    {
        $this->values = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'values' => array_map(static fn($x) => $x->jsonSerialize(), $this->values),
        ];
    }
}

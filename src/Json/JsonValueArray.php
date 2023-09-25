<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Json;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a JSON array
 */
class JsonValueArray extends JsonValue
{
    public const TYPE_NAME = 'jsonValueArray';

    /**
     * The list of array elements
     *
     * @var JsonValue[]
     */
    protected array $values;

    public function __construct(array $values)
    {
        parent::__construct();

        $this->values = $values;
    }

    public static function fromArray(array $array): JsonValueArray
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['values']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->values),
        ];
    }

    public function getValues(): array
    {
        return $this->values;
    }
}

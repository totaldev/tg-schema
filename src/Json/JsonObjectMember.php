<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Json;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents one member of a JSON object.
 */
class JsonObjectMember extends TdObject
{
    public const string TYPE_NAME = 'jsonObjectMember';

    public function __construct(
        /**
         * Member's key.
         */
        protected string    $key,
        /**
         * Member's value.
         */
        protected JsonValue $value,
    ) {}

    public static function fromArray(array $array): JsonObjectMember
    {
        return new static(
            key  : $array['key'],
            value: TdSchemaRegistry::fromArray($array['value']),
        );
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function getValue(): JsonValue
    {
        return $this->value;
    }

    public function setKey(string $value): static
    {
        $this->key = $value;

        return $this;
    }

    public function setValue(JsonValue $value): static
    {
        $this->value = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'key'   => $this->key,
            'value' => $this->value->jsonSerialize(),
        ];
    }
}

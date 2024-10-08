<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Json\JsonValue;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Converts a JsonValue object to corresponding JSON-serialized string. Can be called synchronously.
 */
class GetJsonString extends TdFunction
{
    public const TYPE_NAME = 'getJsonString';

    public function __construct(
        /**
         * The JsonValue object.
         */
        protected JsonValue $jsonValue
    ) {}

    public static function fromArray(array $array): GetJsonString
    {
        return new static(
            TdSchemaRegistry::fromArray($array['json_value']),
        );
    }

    public function getJsonValue(): JsonValue
    {
        return $this->jsonValue;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'json_value' => $this->jsonValue->typeSerialize(),
        ];
    }
}

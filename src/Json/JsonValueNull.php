<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Json;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a null JSON value
 */
class JsonValueNull extends JsonValue
{
    public const TYPE_NAME = 'jsonValueNull';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): JsonValueNull
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

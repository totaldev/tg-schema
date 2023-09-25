<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Converts a JSON-serialized string to corresponding JsonValue object. Can be called synchronously
 */
class GetJsonValue extends TdFunction
{
    public const TYPE_NAME = 'getJsonValue';

    /**
     * The JSON-serialized string
     *
     * @var string
     */
    protected string $json;

    public function __construct(string $json)
    {
        $this->json = $json;
    }

    public static function fromArray(array $array): GetJsonValue
    {
        return new static(
            $array['json'],
        );
    }

    public function getJson(): string
    {
        return $this->json;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'json' => $this->json,
        ];
    }
}

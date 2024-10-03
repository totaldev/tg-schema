<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Custom;

use Totaldev\TgSchema\TdObject;

/**
 * Contains the result of a custom request.
 */
class CustomRequestResult extends TdObject
{
    public const TYPE_NAME = 'customRequestResult';

    public function __construct(
        /**
         * A JSON-serialized result.
         */
        protected string $result
    ) {}

    public static function fromArray(array $array): CustomRequestResult
    {
        return new static(
            $array['result'],
        );
    }

    public function getResult(): string
    {
        return $this->result;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'result' => $this->result,
        ];
    }
}

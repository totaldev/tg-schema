<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Send;

use Totaldev\TgSchema\TdFunction;

/**
 * Sends a custom request; for bots only.
 */
class SendCustomRequest extends TdFunction
{
    public const TYPE_NAME = 'sendCustomRequest';

    public function __construct(
        /**
         * The method name.
         */
        protected string $method,
        /**
         * JSON-serialized method parameters.
         */
        protected string $parameters
    ) {}

    public static function fromArray(array $array): SendCustomRequest
    {
        return new static(
            $array['method'],
            $array['parameters'],
        );
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function getParameters(): string
    {
        return $this->parameters;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'method'     => $this->method,
            'parameters' => $this->parameters,
        ];
    }
}

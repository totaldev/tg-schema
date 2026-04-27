<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Test;

use Totaldev\TgSchema\Error\Error;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns the specified error and ensures that the Error object is used; for testing only. Can be called synchronously.
 */
class TestReturnError extends TdFunction
{
    public const string TYPE_NAME = 'testReturnError';

    public function __construct(
        /**
         * The error to be returned.
         */
        protected Error $error
    ) {}

    public static function fromArray(array $array): TestReturnError
    {
        return new static(
            error: TdSchemaRegistry::fromArray($array['error']),
        );
    }

    public function getError(): Error
    {
        return $this->error;
    }

    public function setError(Error $value): static
    {
        $this->error = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'error' => $this->error->jsonSerialize(),
        ];
    }
}

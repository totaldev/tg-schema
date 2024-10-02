<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Call;

use Totaldev\TgSchema\Error\Error;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The call has ended with an error.
 */
class CallStateError extends CallState
{
    public const TYPE_NAME = 'callStateError';

    public function __construct(
        /**
         * Error. An error with the code 4005000 will be returned if an outgoing call is missed because of an expired timeout.
         */
        protected Error $error
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): CallStateError
    {
        return new static(
            TdSchemaRegistry::fromArray($array['error']),
        );
    }

    public function getError(): Error
    {
        return $this->error;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'error' => $this->error->typeSerialize(),
        ];
    }
}

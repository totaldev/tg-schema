<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Error;

use Totaldev\TgSchema\TdObject;

/**
 * An object of this type can be returned on every function call, in case of an error.
 */
class Error extends TdObject
{
    public const TYPE_NAME = 'error';

    public function __construct(
        /**
         * Error code; subject to future changes. If the error code is 406, the error message must not be processed in any way and must not be displayed to the user.
         */
        protected int    $code,
        /**
         * Error message; subject to future changes.
         */
        protected string $message,
    ) {}

    public static function fromArray(array $array): Error
    {
        return new static(
            $array['code'],
            $array['message'],
        );
    }

    public function getCode(): int
    {
        return $this->code;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'code'    => $this->code,
            'message' => $this->message,
        ];
    }
}

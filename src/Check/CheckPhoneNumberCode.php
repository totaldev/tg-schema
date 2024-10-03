<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Check;

use Totaldev\TgSchema\TdFunction;

/**
 * Check the authentication code and completes the request for which the code was sent if appropriate.
 */
class CheckPhoneNumberCode extends TdFunction
{
    public const TYPE_NAME = 'checkPhoneNumberCode';

    public function __construct(
        /**
         * Authentication code to check.
         */
        protected string $code
    ) {}

    public static function fromArray(array $array): CheckPhoneNumberCode
    {
        return new static(
            $array['code'],
        );
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'code'  => $this->code,
        ];
    }
}

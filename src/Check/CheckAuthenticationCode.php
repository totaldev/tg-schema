<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Check;

use Totaldev\TgSchema\TdFunction;

/**
 * Checks the authentication code. Works only when the current authorization state is authorizationStateWaitCode.
 */
class CheckAuthenticationCode extends TdFunction
{
    public const TYPE_NAME = 'checkAuthenticationCode';

    public function __construct(
        /**
         * Authentication code to check.
         */
        protected string $code
    ) {}

    public static function fromArray(array $array): CheckAuthenticationCode
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

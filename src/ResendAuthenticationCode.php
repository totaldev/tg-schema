<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Resends an authentication code to the user. Works only when the current authorization state is authorizationStateWaitCode, the next_code_type of the result is not null and the server-specified timeout has passed, or when the current authorization state is authorizationStateWaitEmailCode
 */
class ResendAuthenticationCode extends TdFunction
{
    public const TYPE_NAME = 'resendAuthenticationCode';

    public function __construct()
    {
    }

    public static function fromArray(array $array): ResendAuthenticationCode
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

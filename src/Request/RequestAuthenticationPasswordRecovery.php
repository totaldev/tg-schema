<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Request;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Requests to send a 2-step verification password recovery code to an email address that was previously set up. Works only when the current authorization state is authorizationStateWaitPassword
 */
class RequestAuthenticationPasswordRecovery extends TdFunction
{
    public const TYPE_NAME = 'requestAuthenticationPasswordRecovery';

    public function __construct()
    {
    }

    public static function fromArray(array $array): RequestAuthenticationPasswordRecovery
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

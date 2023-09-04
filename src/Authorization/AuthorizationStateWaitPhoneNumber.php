<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Authorization;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * TDLib needs the user's phone number to authorize. Call setAuthenticationPhoneNumber to provide the phone number, or use requestQrCodeAuthentication or checkAuthenticationBotToken for other authentication options
 */
class AuthorizationStateWaitPhoneNumber extends AuthorizationState
{
    public const TYPE_NAME = 'authorizationStateWaitPhoneNumber';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): AuthorizationStateWaitPhoneNumber
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

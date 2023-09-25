<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Authorization;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The user is currently logging out
 */
class AuthorizationStateLoggingOut extends AuthorizationState
{
    public const TYPE_NAME = 'authorizationStateLoggingOut';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): AuthorizationStateLoggingOut
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Authorization;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Initialization parameters are needed. Call setTdlibParameters to provide them
 */
class AuthorizationStateWaitTdlibParameters extends AuthorizationState
{
    public const TYPE_NAME = 'authorizationStateWaitTdlibParameters';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): AuthorizationStateWaitTdlibParameters
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

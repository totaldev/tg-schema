<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Authorization;

/**
 * The user has been successfully authorized. TDLib is now ready to answer general requests.
 */
class AuthorizationStateReady extends AuthorizationState
{
    public const TYPE_NAME = 'authorizationStateReady';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): AuthorizationStateReady
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\User;

/**
 * A deleted user or deleted bot. No information on the user besides the user identifier is available. It is not possible to perform any active actions on this
 * type of user.
 */
class UserTypeDeleted extends UserType
{
    public const TYPE_NAME = 'userTypeDeleted';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): UserTypeDeleted
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

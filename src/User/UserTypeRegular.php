<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\User;

/**
 * A regular user.
 */
class UserTypeRegular extends UserType
{
    public const TYPE_NAME = 'userTypeRegular';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): UserTypeRegular
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

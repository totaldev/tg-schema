<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\User;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The user status was never changed
 */
class UserStatusEmpty extends UserStatus
{
    public const TYPE_NAME = 'userStatusEmpty';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): UserStatusEmpty
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

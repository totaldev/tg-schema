<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\User;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The user was online recently
 */
class UserStatusRecently extends UserStatus
{
    public const TYPE_NAME = 'userStatusRecently';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): UserStatusRecently
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

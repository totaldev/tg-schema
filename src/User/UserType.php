<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\User;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents the type of a user. The following types are possible: regular users, deleted users and bots
 */
class UserType extends TdObject
{
    public const TYPE_NAME = 'UserType';

    public function __construct()
    {
    }

    public static function fromArray(array $array): UserType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
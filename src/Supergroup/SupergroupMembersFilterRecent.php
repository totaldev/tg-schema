<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Supergroup;

/**
 * Returns recently active users in reverse chronological order.
 */
class SupergroupMembersFilterRecent extends SupergroupMembersFilter
{
    public const TYPE_NAME = 'supergroupMembersFilterRecent';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SupergroupMembersFilterRecent
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

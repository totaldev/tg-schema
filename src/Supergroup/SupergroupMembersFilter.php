<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Supergroup;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Specifies the kind of chat members to return in getSupergroupMembers
 */
class SupergroupMembersFilter extends TdObject
{
    public const TYPE_NAME = 'SupergroupMembersFilter';

    public function __construct()
    {
    }

    public static function fromArray(array $array): SupergroupMembersFilter
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

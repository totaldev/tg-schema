<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Supergroup;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns the owner and administrators
 */
class SupergroupMembersFilterAdministrators extends SupergroupMembersFilter
{
    public const TYPE_NAME = 'supergroupMembersFilterAdministrators';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SupergroupMembersFilterAdministrators
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

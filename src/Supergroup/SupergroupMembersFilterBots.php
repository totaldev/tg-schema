<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Supergroup;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns bot members of the supergroup or channel
 */
class SupergroupMembersFilterBots extends SupergroupMembersFilter
{
    public const TYPE_NAME = 'supergroupMembersFilterBots';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SupergroupMembersFilterBots
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Supergroup\SupergroupMembersFilter;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns information about members or banned users in a supergroup or channel. Can be used only if supergroupFullInfo.can_get_members == true; additionally,
 * administrator privileges may be required for some filters
 */
class GetSupergroupMembers extends TdFunction
{
    public const TYPE_NAME = 'getSupergroupMembers';

    /**
     * The type of users to return; pass null to use supergroupMembersFilterRecent
     *
     * @var SupergroupMembersFilter
     */
    protected SupergroupMembersFilter $filter;

    /**
     * The maximum number of users be returned; up to 200
     *
     * @var int
     */
    protected int $limit;

    /**
     * Number of users to skip
     *
     * @var int
     */
    protected int $offset;

    /**
     * Identifier of the supergroup or channel
     *
     * @var int
     */
    protected int $supergroupId;

    public function __construct(int $supergroupId, SupergroupMembersFilter $filter, int $offset, int $limit)
    {
        $this->supergroupId = $supergroupId;
        $this->filter = $filter;
        $this->offset = $offset;
        $this->limit = $limit;
    }

    public static function fromArray(array $array): GetSupergroupMembers
    {
        return new static(
            $array['supergroup_id'],
            TdSchemaRegistry::fromArray($array['filter']),
            $array['offset'],
            $array['limit'],
        );
    }

    public function getFilter(): SupergroupMembersFilter
    {
        return $this->filter;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'supergroup_id' => $this->supergroupId,
            'filter' => $this->filter->typeSerialize(),
            'offset' => $this->offset,
            'limit' => $this->limit,
        ];
    }
}

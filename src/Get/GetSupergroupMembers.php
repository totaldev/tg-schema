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
 * administrator privileges may be required for some filters.
 */
class GetSupergroupMembers extends TdFunction
{
    public const string TYPE_NAME = 'getSupergroupMembers';

    public function __construct(
        /**
         * The maximum number of users to be returned; up to 200.
         */
        protected int                      $limit,
        /**
         * Number of users to skip.
         */
        protected int                      $offset,
        /**
         * Identifier of the supergroup or channel.
         */
        protected int                      $supergroupId,
        /**
         * The type of users to return; pass null to use supergroupMembersFilterRecent.
         */
        protected ?SupergroupMembersFilter $filter = null,
    ) {}

    public static function fromArray(array $array): GetSupergroupMembers
    {
        return new static(
            filter      : (isset($array['filter']) ? TdSchemaRegistry::fromArray($array['filter']) : null),
            limit       : $array['limit'],
            offset      : $array['offset'],
            supergroupId: $array['supergroup_id'],
        );
    }

    public function getFilter(): ?SupergroupMembersFilter
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

    public function setFilter(?SupergroupMembersFilter $value): static
    {
        $this->filter = $value;

        return $this;
    }

    public function setLimit(int $value): static
    {
        $this->limit = $value;

        return $this;
    }

    public function setOffset(int $value): static
    {
        $this->offset = $value;

        return $this;
    }

    public function setSupergroupId(int $value): static
    {
        $this->supergroupId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'filter'        => (null !== $this->filter ? $this->filter->jsonSerialize() : null),
            'limit'         => $this->limit,
            'offset'        => $this->offset,
            'supergroup_id' => $this->supergroupId,
        ];
    }
}

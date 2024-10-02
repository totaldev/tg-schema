<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Supergroup;

/**
 * Used to search for supergroup or channel members via a (string) query.
 */
class SupergroupMembersFilterSearch extends SupergroupMembersFilter
{
    public const TYPE_NAME = 'supergroupMembersFilterSearch';

    public function __construct(
        /**
         * Query to search for.
         */
        protected string $query
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): SupergroupMembersFilterSearch
    {
        return new static(
            $array['query'],
        );
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'query' => $this->query,
        ];
    }
}

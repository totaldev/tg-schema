<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Supergroup;

/**
 * Returns restricted supergroup members; can be used only by administrators.
 */
class SupergroupMembersFilterRestricted extends SupergroupMembersFilter
{
    public const TYPE_NAME = 'supergroupMembersFilterRestricted';

    public function __construct(
        /**
         * Query to search for.
         */
        protected string $query
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): SupergroupMembersFilterRestricted
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

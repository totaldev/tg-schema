<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Supergroup;

/**
 * Returns users banned from the supergroup or channel; can be used only by administrators.
 */
class SupergroupMembersFilterBanned extends SupergroupMembersFilter
{
    public const string TYPE_NAME = 'supergroupMembersFilterBanned';

    public function __construct(
        /**
         * Query to search for.
         */
        protected string $query
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): SupergroupMembersFilterBanned
    {
        return new static(
            query: $array['query'],
        );
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function setQuery(string $value): static
    {
        $this->query = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'query' => $this->query,
        ];
    }
}

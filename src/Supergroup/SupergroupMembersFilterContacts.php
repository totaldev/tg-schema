<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Supergroup;

/**
 * Returns contacts of the user, which are members of the supergroup or channel.
 */
class SupergroupMembersFilterContacts extends SupergroupMembersFilter
{
    public const TYPE_NAME = 'supergroupMembersFilterContacts';

    public function __construct(
        /**
         * Query to search for.
         */
        protected string $query
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): SupergroupMembersFilterContacts
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
